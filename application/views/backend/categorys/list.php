<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="<?=base_url()?>backend/add_category" class="btn btn-primary btn-lg">Add Category</a>
            </div>
            <div class="card-body">
                <?php
                    if($this->session->flashdata('success')){
                        echo '<p class="badge bg-success mb-2">'.$this->session->flashdata('success').'</p>';
                    }
                ?>
                <table id="table_id" class="display">
                    <thead>
                        <tr>
                            <th>Category Name</th>
                            <th>Handle</th>
                            <th>Products</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($listCategory as $key => $value) {
                        ?>
                            <tr>
                                <td><?=$value['title'];?></td>
                                <td><?=$value['handle'];?></td>
                                <td></td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a class="btn btn-warning d-block" href="<?=base_url()?>backend/edit_category/<?=$value['id']?>">
                                            <i class="align-middle text-white" data-feather="edit"></i>
                                        </a>
                                        <a class="btn btn-info d-block" href="<?=base_url()?>category/?find=<?=$value['handle'];?>" target="_blank">
                                            <i class="align-middle text-white" data-feather="eye"></i>
                                        </a>
                                        <a class="btn btn-danger d-block" href="<?=base_url()?>control_category/delete_category/<?=$value['id']?>" onclick="return confirm('Are you sure?')">
                                            <i class="align-middle text-white" data-feather="delete"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready( function () {
        $('#table_id').DataTable();
    });
</script>