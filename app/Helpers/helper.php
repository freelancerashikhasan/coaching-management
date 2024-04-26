<?php

use App\Helpers\Traits\ModalTrait;

function modal($groupId){
    $data = [];
    $modalTrait = new class {
        use ModalTrait;
    };
    if ($groupId === 'student') {
        $data = $modalTrait->studentModals($groupId);
    }
    $html = '';
    foreach($data as $key => $btn){
        $btn_title = $btn['btn_text']; // Access btn_text from array
        $btn_id = $btn['btn_id']; // Access btn_text from array
        $modal_id = $btn['modal_id']; // Access btn_text from array
        $plus = '<img style="width:18px;height:18px;margin-left:10px;" src="'.asset('icon/plus.svg').'" alt="">';
        $data_bs_target =  'data-bs-target="#'.$modal_id.'"';

        $html .= <<<HTML
            <button type="button" class="btn dreadcumb-btn me-2" data-bs-toggle="modal" $data_bs_target>
                $btn_title
                <span>$plus</span>
            </button>
        HTML;
    }

    return $html;
}

