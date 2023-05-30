<?php
use yii\widgets\DetailView;
?>

<?=
DetailView::widget([
    'model' => $mahasiswa091,
    'attributes' => [
        'id091',
        'nim091',
        'nama091',
        'kelas091',
        'status091',
    ],
]);
?>