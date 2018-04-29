@extends('layouts.app')

@section('content')
           <form class="form-horizontal">
                <div class="form-group">
                      <label for="un" class ="control-label col-sm-2">Email</label>
                   <div class="col-sm-10">
                        <input type="text" name="un" class="form-control" id="un">
                   </div>
                </div>
                <div class="form-group">
                      <label for="ps" class ="control-label col-sm-2">Password</label>
                   <div class="col-sm-10">
                        <input type="password" name="ps" class="form-control" id="ps">
                   </div>
                </div>
                <div class="form-group">
                  <label for="ps" class="control-label col-sm-2">Gender</label>
                   <div class="col-sm-10">
                        <label class="radio-inline">
                          <input type="radio" name="rbG" value="Male">
                         Male
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="rbG" value="Female">
                         Female
                      </label>
                   </div>
                </div>
                <div class="form-group">
                 <label for="addr" class="control-label col-sm-2">Address</label>
                 <div class="col-sm-10">
                     <input type="text"class="form-control" id="addr">
                 </div>
                </div>

                <div class="form-group">        
                      <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                          <label><input type="checkbox" name="remember"> I Agree</label>
                        </div>
                      </div>
                </div>
                <div class="form-group">        
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Submit</button>
                  </div>
                </div>
            </form>
@endsection
