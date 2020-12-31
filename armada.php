<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="container">
                <div class="header">
                    <h4 class="title text-center">Data Armada</h4>
                    <br>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCreateArmada">Create</button>
                    <br>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-hover table-striped">
                        <thead>
                            <th>No</th>
                            <th>id_Armada</th>
                            <th>no_pol</th>
                            <th>jenis</th>
                            <th>jumlah_seat</th>
                            <th>status</th>
                            <th>Action</th>
                        </thead>
                        <tbody id="tabel_armada">

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalCreateArmada" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Armada</h5>
                <br>
                <button type="button" class="close mb-3" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <br>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="exampleInputPassword1">NoPol</label>
                    <input type="text" class="form-control" name="createNoPol">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Jenis</label>
                    <input type="text" class="form-control" name="createJenis">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Jumlah Seat</label>
                    <input type="text" class="form-control" name="createJumlahSeat">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Status</label>
                    <input type="text" class="form-control" name="createStatus">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary createArmada" data-dismiss="modal">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="updateModalCreateArmada" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Armada</h5>
                <br>
                <button type="button" class="close mb-3" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <br>
            </div>
            <div class="modal-body">
                <input type="hidden" name="id">
                <div class="form-group">
                    <label for="exampleInputPassword1">NoPol</label>
                    <input type="text" class="form-control" name="updateNoPol">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Jenis</label>
                    <input type="text" class="form-control" name="updateJenis">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Jumlah Seat</label>
                    <input type="text" class="form-control" name="updateJumlahSeat">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Status</label>
                    <input type="text" class="form-control" name="updateStatus">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary updateArmada" data-dismiss="modal">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>