<style>
    .title p{
        color: var(--Dark-Gray, #403E3B);
        font-family: 'Lexend' , 'sans-serif' !important;
        font-size: 18px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
        padding-bottom: 20px;
    }
    .pre-name{
        padding-left: 23px;
        padding-top: 10px;

    }
    .pre-name h5{
        color: var(--Dark-Gray, #403E3B);
        font-family: Lexend;
        font-size: 22px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }
    .pre-name p{
        color: var(--Gray-1, #A5A6A4);
        font-family: Lexend;
        font-size: 20px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }
    .form-lable{
        color: var(--Dark-Gray, #403E3B);
        font-family: Lexend;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }
    input{
        border-radius: 6px;
        background: var(--gray-20, #D9D8D7);
        display: flex;
        width: 100%;
        height: 46px;
        padding: 10px 10px 10px 22px;
        align-items: center;
        gap: 10px;
        border: none !important;
    }
    select{
        border-radius: 6px;
        background: var(--gray-20, #D9D8D7);
        display: flex;
        width: 100%;
        height: 46px;
        padding: 10px 10px 10px 22px;
        align-items: center;
        gap: 10px;
        border: none !important;
    }
    .profile_pic{
        display: flex;
        width: 134px;
        height: 78px;
        padding: 10px;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 10px;
        border-radius: 6px;
        border: 2px dashed var(--Gray-1, #A5A6A4);
    }
    .error{
        border: 4px dashed #ff0000 !important;
    }
    .upload{
        width: 32px;
        height: 32px;
        flex-shrink: 0;
        fill: var(--Gray-1, #A5A6A4);
    }
    #gender{
        width: 22px;
        height: 22px;
        margin-left: 55px;
        color: var(--Dark-Gray, #403E3B) !important;
        background-color: var(--Dark-Gray, #403E3B) !important;
        font-family: Lexend;

    }
    .gender_text{
        width: 60px;
        font-size: 14px;
        font-weight: 400;
        color: var(--Dark-Gray, #403E3B);
        font-family: Lexend;
    }
    .gender_text:checked{
        color: #403E3B !important;
    }
    .file_input {
        display: none;
    }

    .upload {
        cursor: pointer;
    }
    .selected_image {
        max-width: 100%;
        max-height: 100%;
        display: none;
        margin-top: -20px !important;
    }
    .student_image{
        max-width: 50px;
    }
    @media (min-width:600px){
        .contetent{
            margin-left: 30px !important;
        }
    }
    @media (max-width:600px){
        .pdf_sec{
            width: 100% !important;
            display: block !important;
        }
    }
</style>
