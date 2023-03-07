@extends('admin.layouts.master')
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Form Controls </h4>
                    <form>
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="form-group">
                                    <label for="simpleinput">Nama Pengguna</label>
                                    <input type="text" id="simpleinput" class="form-control"
                                        placeholder="Enter your text">
                                </div>

                            </div>

                            <div class="col-xl-4">
                                <div class="form-group">
                                    <label for="example-password">Email Pengguna</label>
                                    <input type="email" id="example-password" class="form-control" value="password">
                                </div>

                            </div>
                            <div class="col-xl-4">
                                <div class="form-group">
                                    <label>File Browser</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="form-group">
                                    <label for="example-password">Password</label>
                                    <input type="password" id="example-password" class="form-control" value="password">
                                </div>

                            </div>
                            <div class="col-xl-4">
                                <div class="form-group">
                                    <label for="example-password">Password</label>
                                    <input type="password" id="example-password" class="form-control" value="password">
                                </div>

                            </div>
                            <div class="col-xl-4">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Select</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                        </div>



                        <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                    </form>
                </div>
                <!-- end card-body-->
            </div>
            <!-- end card -->
        </div>
    </div>
@endsection
