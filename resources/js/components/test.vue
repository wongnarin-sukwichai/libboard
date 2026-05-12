<template>
    <div :class="{ 'dark': isDarkMode }" class="min-h-screen transition-colors duration-500 bg-sky-50 dark:bg-slate-950 font-anuphan">
        
        <div class="fixed inset-0 z-0 pointer-events-none">
            <img 
                src="/img/library_cartoon.png" 
                class="object-cover w-full h-full opacity-40 dark:opacity-20 filter saturate-150"
                @error="(e) => e.target.style.display = 'none'" 
            />
            <div class="absolute inset-0 bg-gradient-to-tr from-sky-100/50 via-transparent to-white/30 dark:from-slate-950"></div>
        </div>

        <div class="relative z-10 p-6">
            <div class="flex flex-col gap-6" v-if="isReady">
                
                <div class="flex justify-between items-center bg-white dark:bg-slate-800 p-4 rounded-2xl border-4 border-slate-900 dark:border-white shadow-[8px_8px_0px_0px_rgba(15,23,42,1)] dark:shadow-[8px_8px_0px_0px_rgba(255,255,255,0.3)]">
                    <h1 class="text-3xl font-bold text-slate-900 dark:text-white">📚 Library Dashboard</h1>
                    <button @click="toggleTheme" class="p-2 transition-transform bg-yellow-400 border-2 border-black rounded-xl hover:rotate-12">
                        <box-icon :name="isDarkMode ? 'sun' : 'moon'"></box-icon>
                    </button>
                </div>

                <div class="grid grid-cols-12 gap-8">
                    <div class="col-span-12 lg:col-span-7 cartoon-box">
                        <h2 class="mb-4 text-xl font-bold">📈 สถิติการเข้าใช้งาน</h2>
                        <div class="h-[350px]">
                            <canvas ref="repPatron"></canvas>
                        </div>
                    </div>

                    <div class="col-span-12 lg:col-span-5 cartoon-box">
                        <h2 class="mb-4 text-xl font-bold">📊 ยอดการยืมหนังสือ</h2>
                        <div class="h-[350px]">
                            <canvas ref="repBook"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { Chart, registerables } from 'chart.js';
Chart.register(...registerables);

export default {
    data() {
        return {
            isReady: false,
            isDarkMode: false,
            charts: {}
        }
    },
    mounted() {
        this.isReady = true;
        this.$nextTick(() => {
            this.initCharts();
        });
    },
    methods: {
        toggleTheme() {
            this.isDarkMode = !this.isDarkMode;
            this.updateChartColors();
        },
        initCharts() {
            const textColor = this.isDarkMode ? '#ffffff' : '#000000';
            
            // กราฟเส้นแบบเด้งๆ
            this.charts.patron = new Chart(this.$refs.repPatron, {
                type: 'line',
                data: {
                    labels: ['ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.'],
                    datasets: [{
                        label: 'ผู้ใช้บริการ',
                        data: [400, 800, 600, 1200, 900],
                        borderColor: '#FF6384', // สีชมพูการ์ตูน
                        borderWidth: 5,
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        fill: true,
                        pointRadius: 8,
                        pointBackgroundColor: '#fff',
                        pointBorderWidth: 3,
                        tension: 0.4
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    animation: { duration: 2000, easing: 'easeOutQuart' },
                    plugins: { legend: { labels: { font: { size: 14, weight: 'bold' }, color: textColor } } },
                    scales: {
                        x: { ticks: { color: textColor } },
                        y: { ticks: { color: textColor }, grid: { color: 'rgba(0,0,0,0.1)' } }
                    }
                }
            });

            // กราฟแท่งแบบเด้งๆ
            this.charts.book = new Chart(this.$refs.repBook, {
                type: 'bar',
                data: {
                    labels: ['จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.'],
                    datasets: [{
                        label: 'ยอดคืน',
                        data: [15, 25, 10, 30, 20],
                        backgroundColor: '#4BC0C0', // สีฟ้าการ์ตูน
                        borderColor: '#000',
                        borderWidth: 3,
                        borderRadius: 10
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    animation: { 
                        duration: 2500, 
                        easing: 'easeOutBounce' // เด้งดึ๋ง
                    },
                    plugins: { legend: { labels: { color: textColor } } },
                    scales: { y: { ticks: { color: textColor } }, x: { ticks: { color: textColor } } }
                }
            });
        },
        updateChartColors() {
            if(this.charts.patron) this.charts.patron.destroy();
            if(this.charts.book) this.charts.book.destroy();
            this.initCharts();
        }
    }
}
</script>

<style scoped>
/* สไตล์กล่องการ์ตูนแบบ Neo-brutalism */
.cartoon-box {
    @apply p-6 bg-white dark:bg-slate-800 rounded-3xl border-4 border-slate-900 dark:border-white shadow-[10px_10px_0px_0px_rgba(15,23,42,1)] dark:shadow-[10px_10px_0px_0px_rgba(255,255,255,0.2)] transition-all hover:-translate-x-1 hover:-translate-y-1 hover:shadow-[15px_15px_0px_0px_rgba(15,23,42,1)];
}

.font-anuphan {
    font-family: 'Anuphan', sans-serif;
}
</style>