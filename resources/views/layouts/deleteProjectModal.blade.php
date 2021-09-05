<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="deleteProject{{ $project->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal Porjects</h5>
            
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body pb-0">
                <form action="{{ route('project.destroy', $project->id) }}" method="POST">
                    @method('DELETE')    
                    @csrf
                    <div class="form-row">
                    
                        <input type="text" name="name" class="form-control" placeholder="name" value="{{ $project->name }}" hidden>
                        <input type="text" name="git_url" class="form-control" placeholder="git_url" value="{{ $project->git_url }}" hidden>
                        
                        <div class="col-md-12">
                            <p>Are you sure you want to delete {{ $project->name }} project?</p>
                        </div>
                    </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Yes</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                        
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
