 <!-- Begin Page Content -->
 <div class="container-fluid">

   <!-- Page Heading -->

   <!-- MSI SECTION -->
   <div class="row">
     <div class="col-5">
       <?php if($this->session->flashdata('add_msi') != '') { ?>
       <div class="alert alert-success alert-dismissible fade show" role="alert">
         Produk baru berhasil ditambahkan
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
         <?php unset($_SESSION['add_msi']); ?>
       </div>
       <?php } ?>
       <?php if($this->session->flashdata('edit_msi') != '') { ?>
       <div class="alert alert-success alert-dismissible fade show" role="alert">
         Produk berhasil diupdate
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
         <?php unset($_SESSION['edit_msi']); ?>
       </div>
       <?php } ?>
       <?php if($this->session->flashdata('delete_msi') != '') { ?>
       <div class="alert alert-success alert-dismissible fade show" role="alert">
         Produk berhasil dihapus
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
         <?php unset($_SESSION['delete_msi']); ?>
       </div>
       <?php } ?>
     </div>
   </div>
   <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newRoleModal"><i
       class="bi bi-plus-square"></i>&nbsp;&nbsp;Add Product</a>
   <div class="card shadow mb-4">

     <div class="card-header py-3">
       <h6 class="m-0 font-weight-bold text-primary">Product MSI</h6>
     </div>
     <br>
     <div class="row justify-content-center">
       <?php foreach($msi as $ms) : ?>
       <div class="col-sm text-center mb-4">
         <div class="card ml-2 border-bottom-success "
           style="box-sizing: border-box; width: 232px; height: fit-content;">
           <img style="width: 231px; height: 200px;" src="<?= base_url('assets/img/products/msi/') . $ms['image']; ?>"
             class="card-img">
           <div class="card-body">
             <h6 class="font-weight-bold card-title"><?= $ms["name"]; ?></h6>
             <h6 class="card-price">Rp <?= $ms["price"]; ?></h6>
             <p class="card-text text-justify pt-2"><?= $ms["description"]; ?></p>
             <p class="card-text text-justify pt-1 pb-2"><strong>Status:
               </strong><?= $ms["is_active"] == 1 ? 'Aktif' : 'Tidak Aktif'; ?></p>
             <div class="container">
               <div class="row justify-content-center">
                 <div class="col-sm">
                   <a href="<?= base_url();?>admin/edit_msi/<?= $ms['id']; ?>"><i
                       class="btn btn-primary bi bi-pencil-square"></i></a>
                 </div>
                 <div class="col-sm">
                   <a class="" href="<?= base_url(); ?>admin/delete_msi/<?= $ms['id']; ?>" data-toggle="modal"
                     data-target="#deleteModal"><i class="btn btn-danger bi bi-trash"></i></a>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
       <?php endforeach; ?>
     </div>
   </div>
   <!-- END OF MSI SECTION -->

 </div>
 <!-- /.container-fluid -->

 <!-- End of Main Content -->

 <!-- ADD MODAL -->
 <div class="modal fade" id="newRoleModal" tabindex="-1" role="dialog" aria-labelledby="newRoleModalLabel"
   aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="newRoleModalLabel">New Product</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <?= form_open_multipart(''); ?>
       <div class="modal-body">
         <div class="form-group">
           <input type="text" class="form-control" id="name" name="name" placeholder="Product name">
           <br>
           <input type="text" class="form-control" id="price" name="price" placeholder="Price">
           <br>
           <input type="text" class="form-control" id="description" name="description" placeholder="Description">
           <br>
           <div class="custom-file">
             <input type="file" class="custom-file-input" id="image" name="image">
             <label class="custom-file-label" for="image">Choose file</label>
           </div>
           <br>
           <div class="form-group form-check pt-3">
             <input type="checkbox" class="form-check-input" id="is_active" name="is_active">
             <label class="form-check-label" for="is_active">Active ?</label>
           </div>
         </div>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         <button type="submit" class="btn btn-primary">Add</button>
       </div>
       </form>
     </div>
   </div>
 </div>
 <!-- END OF ADD MODAL -->

 <!-- DELETE MODAL -->
 <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
   aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel">Konfirmasi menghapus produk ?</h5>
         <button class="close" type="button" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">×</span>
         </button>
       </div>
       <div class="modal-body">Pilih "Delete" untuk menghapus secara permanen.</div>
       <div class="modal-footer">
         <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
         <a class="btn btn-primary" href="<?= base_url(); ?>admin/delete_msi/<?= $ms['id']; ?>">Delete</a>
       </div>
     </div>
   </div>
 </div>
 <!-- END OF DELETE MODAL -->

