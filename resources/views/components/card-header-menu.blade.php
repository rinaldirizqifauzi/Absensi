<div class="form-control">
    <div class="card-header">
        <div class="row">
            <div class="col-md-5">
               <form action="" method="GET" class="form-inline form-row">
                  <div class="col">
                     <div class="input-group mx-1">
                        <input name="keyword" type="search" class="form-control " placeholder="Cari">
                        <div class="input-group-append">
                            <button class="btn btn-search" type="submit">
                                <i class="fas fa-search"></i>
                           </button>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
            <div class="col-md-7">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="{{ route('dashboard.index') }}" class="btn btn-search ">Menu</a>
                </div>
            </div>
        </div>
    </div>
</div>
