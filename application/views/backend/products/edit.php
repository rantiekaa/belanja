<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-body">
                <form action="<?=base_url()?>/backend_func/edit_category" method="post">
                    <input type="hidden" name="id" value="<?=$selectCategory->id;?>">
                    <div class="form-group mb-3">
                        <label for="catname">Category name</label>
                        <input type="text" name="title" class="form-control" placeholder="Cateogry Name" id="catname" value="<?=$selectCategory->title?>">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-lg" name="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>