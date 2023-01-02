<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-body">
                <form action="<?=base_url()?>/control_category/add_category" method="post">
                    <div class="form-group mb-3">
                        <label for="catname" class="mb-1">Category name</label>
                        <input type="text" name="title" class="form-control" id="catname">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-lg" name="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>