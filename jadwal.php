<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="container">
                <div class="header">
                    <h4 class="title text-center">Data Jadwal</h4>
                    <br>
                    <button class="btn btn-primary tambah" data-toggle="modal" data-target="#exampleModalCreateJadwal">Create</button>
                    <br>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-hover table-striped">
                        <thead>
                            <th>No</th>
                            <th>id_jadwal</th>
                            <th>nama_jadwal</th>
                            <th>alamat</th>
                            <th>no_hp</th>
                            <th>Action</th>
                        </thead>
                        <tbody id="tabel_jadwal">

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalCreateJadwal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">jadwal</h5>
                <br>
                <button type="button" class="close mb-3" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <br>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="exampleInputPassword1">Armada</label>
                    <select class="form-control" name="createArmada">

                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Sopir</label>
                    <select class="form-control" name="createSopir">

                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Jadwal Surabaya</label>
                    <input type="time" class="form-control" name="createSurabaya">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Jadwal Solo</label>
                    <input type="time" class="form-control" name="createSolo">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Jadwal Semarang</label>
                    <input type="time" class="form-control" name="createSemarang">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Tiba Jakarta</label>
                    <input type="time" class="form-control" name="createJakarta">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary createjadwal" data-dismiss="modal">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="updateModalCreateJadwal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">jadwal</h5>
                <br>
                <button type="button" class="close mb-3" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <br>
            </div>
            <div class="modal-body">
                <input type="hidden" name="id">
                <div class="form-group">
                    <label for="exampleInputPassword1">Armada</label>
                    <select class="form-control" name="updateArmada">

                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Sopir</label>
                    <select class="form-control" name="updateSopir">

                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Jadwal Surabaya</label>
                    <input type="time" class="form-control" name="updateSurabaya">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Jadwal Solo</label>
                    <input type="time" class="form-control" name="updateSolo">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Jadwal Semarang</label>
                    <input type="time" class="form-control" name="updateSemarang">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Tiba Jakarta</label>
                    <input type="time" class="form-control" name="updateJakarta">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary updatejadwal" data-dismiss="modal">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>