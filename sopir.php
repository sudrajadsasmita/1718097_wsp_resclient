<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="container">
                <div class="header">
                    <h4 class="title text-center">Data Sopir</h4>
                    <br>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCreateSopir">Create</button>
                    <br>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-hover table-striped">
                        <thead>
                            <th>No</th>
                            <th>id_sopir</th>
                            <th>nama_sopir</th>
                            <th>alamat</th>
                            <th>no_hp</th>
                            <th>Action</th>
                        </thead>
                        <tbody id="tabel_sopir">

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalCreateSopir" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sopir</h5>
                <br>
                <button type="button" class="close mb-3" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <br>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="exampleInputPassword1">Nama</label>
                    <input type="text" class="form-control" name="createNama">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <input type="text" class="form-control" name="createAlamat">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">No Hp</label>
                    <input type="text" class="form-control" name="createNoHp">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary createSopir" data-dismiss="modal">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="updateModalCreateSopir" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sopir</h5>
                <br>
                <button type="button" class="close mb-3" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <br>
            </div>
            <div class="modal-body">
                <input type="hidden" name="id">
                <div class="form-group">
                    <label for="exampleInputPassword1">Nama</label>
                    <input type="text" class="form-control" name="updateNama">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <input type="text" class="form-control" name="updateAlamat">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">No Hp</label>
                    <input type="text" class="form-control" name="updateNoHp">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary updateSopir" data-dismiss="modal">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>