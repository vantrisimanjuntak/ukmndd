<div class="card-body">
    <div class="d-sm-flex justify-content-between align-items-center">
        <h4 class="header-title mb-0">Postingan Terbaru</h4>
    </div>
    <div class="market-status-table mt-4">
        <form action="<?= base_url('admin/postingan/post') ?>" method="POST">
            <textarea class="ckeditor" id="ckedtor" name="berita"></textarea>


            <div class="container-fluid">
                <div class="row">
                    <button class="btn btn-success ml-auto" type="submit">Posting</button>
                </div>
            </div>
        </form>

    </div>


</div>