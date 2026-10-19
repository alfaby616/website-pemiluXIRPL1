<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    public function run()
    {
        $students = [
            ['nis' => '1001', 'nama' => 'Ailsa septia artanti'],
            ['nis' => '1002', 'nama' => 'Alea nadjhoa'],
            ['nis' => '1003', 'nama' => 'Alfaby diar erviano'],
            ['nis' => '1004', 'nama' => 'Anna rizky augustine'],
            ['nis' => '1005', 'nama' => 'Claresta elysia abiyu'],
            ['nis' => '1006', 'nama' => 'Fajar Nugraha'],
            ['nis' => '1007', 'nama' => 'Gita Gutawa'],
            ['nis' => '1008', 'nama' => 'Hadi Sucipto'],
            ['nis' => '1009', 'nama' => 'Indra Bekti'],
            ['nis' => '1010', 'nama' => 'Joko Anwar'],
            ['nis' => '1011', 'nama' => 'Kartika Sari'],
            ['nis' => '1012', 'nama' => 'Lestari Ayu'],
            ['nis' => '1013', 'nama' => 'Muhammad Ilham'],
            ['nis' => '1014', 'nama' => 'Nadia Saphira'],
            ['nis' => '1015', 'nama' => 'Oki Setiana'],
            ['nis' => '1016', 'nama' => 'Putra Pratama'],
            ['nis' => '1017', 'nama' => 'Qori Akbar'],
            ['nis' => '1018', 'nama' => 'Rina Nose'],
            ['nis' => '1019', 'nama' => 'Siti Aminah'],
            ['nis' => '1020', 'nama' => 'Toni Blank'],
            ['nis' => '1021', 'nama' => 'Umar Said'],
            ['nis' => '1022', 'nama' => 'Vina Panduwinata'],
            ['nis' => '1023', 'nama' => 'Wawan Darmawan'],
            ['nis' => '1024', 'nama' => 'Xaverius Bintang'],
            ['nis' => '1025', 'nama' => 'Yuni Shara'],
            ['nis' => '1026', 'nama' => 'Zainuddin MZ'],
        ];

        foreach ($students as $student) {
            Student::create($student);
        }
    }
}