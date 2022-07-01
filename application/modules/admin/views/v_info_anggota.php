<div class="col-12 mt-5">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Data Table Primary</h4>
            <div class="data-tables datatable-primary">
                <table id="dataTable2" class="text-center">
                    <thead class="text-capitalize">
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Posisi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($DataAnggota->result_array() as $row) : ?>
                            <tr>
                                <td><?= $row['id']; ?></td>
                                <td><?= $row['nama']; ?></td>
                                <td><?= $row['posisi']; ?></td>
                            </tr>


                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>