 <!-- Create Note -->
 <div class="col-md-auto ms-auto">
     <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#createNoteModal">
         Create Note
     </button>

     <!-- Create Modal -->
     <div class="modal fade" id="createNoteModal" tabindex="-1" aria-labelledby="createNoteLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="createNoteLabel">Create Note</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>

                 <form action="{{ route('notes.store') }}" method="post">
                     @csrf
                     <div class="modal-body">
                         <div class="form-floating mb-3">
                             <input class="form-control" name="title" id="title" type="text" placeholder="Title">
                             <label for="title">Title</label>
                         </div>
                         <div class="form-floating">
                             <textarea class="form-control" name="content" id="content" style="height: 200px;" placeholder="Content"></textarea>
                             <label for="content">Content</label>
                         </div>
                     </div>
                     <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                         <button type="submit" class="btn btn-primary">Create</button>
                     </div>
                 </form>
             </div>
         </div>
     </div>
     <!-- End Create Modal -->
 </div>