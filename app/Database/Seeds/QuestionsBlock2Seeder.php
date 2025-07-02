<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class QuestionsBlock2Seeder extends Seeder
{
    public function run()
    {
        $questions = [
            [
                'question_code' => 'service_info_availability',
                'question_text' => 'Informasi pelayanan pada unit layanan ini tersedia melalui media elektronik maupun non elektronik.',
            ],
            [
                'question_code' => 'service_requirements_easy_to_fulfill',
                'question_text' => 'Persyaratan pelayanan yang ditetapkan mudah dipenuhi/disiapkan oleh konsumen.',
            ],
            [
                'question_code' => 'service_procedure_easy_to_follow',
                'question_text' => 'Prosedur/alur pelayanan yang ditetapkan mudah diikuti/dilakukan.',
            ],
            [
                'question_code' => 'service_resolution_time_met',
                'question_text' => 'Jangka waktu penyelesaian pelayanan yang diterima sesuai dengan yang ditetapkan.',
            ],
            [
                'question_code' => 'service_fee_as_per_policy',
                'question_text' => 'Biaya pelayanan yang dibayarkan sesuai dengan biaya yang ditetapkan.',
            ],
            [
                'question_code' => 'service_product_as_promised',
                'question_text' => 'Produk pelayanan yang diterima sesuai dengan yang dijanjikan.',
            ],
            [
                'question_code' => 'support_facilities_comfortable',
                'question_text' => 'Sarana dan prasarana pendukung pelayanan memberikan kenyamanan.',
            ],
            [
                'question_code' => 'bps_data_accessible',
                'question_text' => 'Data BPS mudah diakses melalui fasilitas utama yang digunakan.',
            ],
            [
                'question_code' => 'service_response_good',
                'question_text' => 'Petugas pelayanan dan/atau aplikasi pelayanan online merespon dengan baik.',
            ],
            [
                'question_code' => 'service_info_clear',
                'question_text' => 'Petugas pelayanan dan/atau aplikasi pelayanan online mampu memberikan informasi yang jelas.',
            ],
            [
                'question_code' => 'complaint_facility_visible',
                'question_text' => 'Keberadaan fasilitas pengaduan PST mudah diketahui.',
            ],
            [
                'question_code' => 'handling_process',
                'question_text' => 'Proses penanganan pengaduan PST mudah diketahui, jelas, dan tidak berbelit-belit.',
            ],
            [
                'question_code' => 'no_discrimination_in_service',
                'question_text' => 'Tidak ada diskriminasi dalam pelayanan.',
            ],
            [
                'question_code' => 'no_service_outside_procedure',
                'question_text' => 'Tidak ada pelayanan di luar prosedur/kecurangan pelayanan.',
            ],
            [
                'question_code' => 'no_gratification_acceptance',
                'question_text' => 'Tidak ada penerimaan gratifikasi.',
            ],
            [
                'question_code' => 'no_illegal_fees_in_service',
                'question_text' => 'Tidak ada pungutan liar (pungli) dalam pelayanan.',
            ],
            [
                'question_code' => 'no_intermediary_practice',
                'question_text' => 'Tidak ada praktik percaloan dalam pelayanan.',
            ],
        ];

        foreach ($questions as $question) {
            $this->db->table('questions_block_2')->insert($question);
        }
    }
}
