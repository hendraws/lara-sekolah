 <!-- Modal -->
 <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <form action="{{route('siswa.store')}}" method="post">
                     {{csrf_field()}}
                     <div class="form-group">
                         <label for="nama_depan">Nama Depan</label>
                         <input type="text" name="nama_depan" class="form-control" id="nama_depan">
                     </div>
                     <div class="form-group">
                         <label for="nama_belakang">Nama Belakang</label>
                         <input type="text" name="nama_belakang" class="form-control" id="nama_belakang">
                     </div>
                     <div class="form-group">
                         <label for="jenis_kelamin">Jenis Kelamin</label>
                         <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                             <option>Pilih Jenis Kelamin</option>
                             <option value="l">Laki-laki</option>
                             <option value="p">Perempuan</option>
                         </select>
                     </div>
                     <div class="form-group">
                         <label for="agama">Agama</label>
                         <input type="text" name="agama" class="form-control" id="agama">
                     </div>
                     <div class="form-group">
                         <label for="alamat">Alamat</label>
                         <input type="text" name="alamat" class="form-control" id="alamat">
                     </div>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                 <button type="submit" class="btn btn-primary">Save changes</button>
             </div>
             </form>
         </div>
     </div>
 </div>