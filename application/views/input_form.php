<div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="container">
                                <h1 class="card-title">Input Data Mahasiswa</h1>
                                <h3 class="card-subtitle"> Form input data mahasiswa</h3>

                                <form class="form" action="<? base_url(); ?>welcome/home" method="post">

                                    <div class="form-group m-t-40 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Nama </label>
                                        <div class="col-10">
                                            <input class="form-control" type="text" id="example-text-input">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="example-month-input" class="col-2 col-form-label">Kelas</label>
                                        <div class="col-10">
                                            <select class="custom-select col-12" id="inlineFormCustomSelect">
                                                <option selected="">Choose...</option>
                                                <option value="Pagi">Pagi</option>
                                                <option value="Malam">Malam</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                  
                                    <div class="form-group row">
                                        <label for="example-number-input" class="col-2 col-form-label">Number</label>
                                        <div class="col-10">
                                            <input class="form-control" type="number" id="example-number-input">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-2 col-form-label">Date</label>
                                        <div class="col-10">
                                            <input class="form-control" type="date" id="example-date-input">
                                        </div>
                                    </div>
                                   
                                    
                                    <div class="form-group row">
                                        <label for="example-month-input" class="col-2 col-form-label">Study Program</label>
                                        <div class="col-10">
                                            <select class="custom-select col-12" id="inlineFormCustomSelect">
                                                <option selected="">Choose...</option>
                                                <option value="Teknik Informatika">Teknik Informatika</option>
                                                <option value="Sistem Informasi">Sistem Informasi</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <button type="submit" class="btn btn-outline-success">Submit</button>
                                        <button type="reset" class="btn btn-danger" style="margin-left: 10px;">Reset</button>
                                    </div>

                                    
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>