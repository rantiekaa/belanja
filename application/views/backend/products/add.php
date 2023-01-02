<form action="<?= base_url() ?>/control_product/add_product" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-8">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label for="title" class="mb-1">Title</label>
                                <input type="text" name="title" class="form-control" id="title" required>
                            </div>
                            <div class="form-group">
                                <label for="content" class="mb-1">Description</label>
                                <textarea name="content" id="content" class="form-control" cols="30" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="image" class="mb-1">Image</label>
                                <input type="file" name="image" class="form-control" id="image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label for="price" class="mb-1">Price</label>
                                <input type="text" name="price" class="form-control" id="price" required>
                            </div>
                            <div class="form-group">
                                <label for="compare_at_price" class="mb-1">Compare at Price</label>
                                <input type="text" name="compare_at_price" class="form-control" id="compare_at_price">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="stock" class="mb-1">Stock</label>
                                <input type="number" name="stock" class="form-control" id="stock" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="status" class="mb-1">Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="1">Active</option>
                                    <option value="0">Draft</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="weight" class="mb-1">Weight (kg)</label>
                                <input type="text" name="weight" class="form-control" id="weight">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="category" class="mb-1">Category</label>
                                <select name="category" id="category" class="form-control" required>
                                    <option value="">Select</option>
                                    <?php
                                        foreach ($listCategory as $key => $value) {
                                    ?>
                                        <option value="<?=$value['id']?>"><?=$value['title']?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary btn-lg">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>