<?php

namespace App\Helpers\Traits;



trait ModalTrait
{
    public function studentModals($groupId)
    {
        $data[$groupId] = [
            [
                'btn_text' => 'Department',
                'btn_id' => 'departmentBtn',
                'modal_id' => 'departmentModal',
            ],
            [
                'btn_text' => 'Section',
                'btn_id' => 'sectionBtn',
                'modal_id' => 'sectionModal',
            ],
            [
                'btn_text' => 'Class',
                'btn_id' => 'classBtn',
                'modal_id' => 'classModal',
            ],
        ];
        return $data[$groupId];
    }
}
