<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function GetTopView()
    {
        $data = array(
            [
                'BIBID' => 'b00163678',
                'TITLE' => 'จิตวิทยาการรู้คิด / พาสนา จุลรัตน์',
                'LANG' => 'tha'
            ],
            [
                'BIBID' => 'b00166864',
                'TITLE' => 'เพราะมีชีวิตดีได้กว่าที่เป็น = Atomic habits / James Clear ; ประพาฬรัตน์ ยงมานิตชัย, แปล',
                'LANG' => 'tha'
            ],
            [
                'BIBID' => 'b00162388',
                'TITLE' => 'แคลคูลัสสำหรับผู้ไม่เก่งคณิตศาสตร์ : แคลคูลัสเชิงอนุพันธ์ / ปกรณ์ พลาหาญ, เอนก จันทรจรูญ',
                'LANG' => 'tha'
            ],
            [
                'BIBID' => 'b00256784',
                'TITLE' => 'เอกสารการสอนชุดวิชาการพัฒนาเด็กปฐมวัยด้านการคิด 21331 หน่วยที่ 1-7, 8-15 = Thinking development in early childhood / สาขาวิชาศึกษาศาสตร์ มหาวิทยาลัยสุโขทัยธรรมาธิราช.',
                'LANG' => 'tha'
            ],
            [
                'BIBID' => 'b00106884',
                'TITLE' => 'Verbes คำกริยา ภาษาฝรั่งเศส / ปาริชาติ ชุมสาย ณ อยุธยา',
                'LANG' => 'tha'
            ],
            [
                'BIBID' => 'b00031768',
                'TITLE' => 'เทียวอีสาน / สถาบันวิจัยและพัฒนา มหาวิทยาลัยขอนแก่น ; ผู้เรียบเรียง ธวัช ปุณโณทก...[และคนอื่น ๆ]',
                'LANG' => 'tha'
            ],
            [
                'BIBID' => 'b00256888',
                'TITLE' => 'Cultural tourism / Hilary Du Cros and Bob McKercher.',
                'LANG' => 'tha'
            ],
            [
                'BIBID' => 'b00237354',
                'TITLE' => 'ผลกระทบของความโปร่งใสในการปฏิบัติงานทางการบัญชีที่มีต่อคุณภาพรายงานทางการเงินของเทศบาลในเขตภาคตะวันออกเฉียงเหนือ / วิทยานิพนธ์ ของ คัทลียา ลาศรีทัศน์',
                'LANG' => 'tha'
            ],
            [
                'BIBID' => 'b00237576',
                'TITLE' => 'การพัฒนาการจัดการเรียนรู้วิทยาศาสตร์โดยใช้ผังกราฟิกประกอบการสอนแบบ Gi เพื่อส่งเสริมผลสัมฤทธิ์ทางการเรียนความสามารถด้านการคิดวิเคราะห์และเจตคติต่อวิชาวิทยาศาสตร์ของนักเรียนชั้นประถมศึกษาปีที่ 3 / วิทยานิพนธ์ ของ สายชล แก้วเพชร',
                'LANG' => 'tha'
            ],
            [
                'BIBID' => '00118284',
                'TITLE' => 'ฝึกเด็กให้เก่งอังกฤษ = English for kids / เศรษฐวิทย์',
                'LANG' => 'tha'
            ]

        );
        
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
