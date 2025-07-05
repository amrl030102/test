<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ApplicationsFixture
 */
class ApplicationsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'staff_id' => 1,
                'department_id' => 1,
                'type_id' => 1,
                'start_date' => '2025-06-29',
                'end_date' => '2025-06-29',
                'reason' => 'Lorem ipsum dolor sit amet',
                'image' => 'Lorem ipsum dolor sit amet',
                'image_dir' => 'Lorem ipsum dolor sit amet',
                'approval_status' => 'Lorem ',
                'status' => 1,
                'created' => '2025-06-29 23:22:38',
                'modified' => '2025-06-29 23:22:38',
            ],
        ];
        parent::init();
    }
}
