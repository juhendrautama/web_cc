			<!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Paotingan Blog</h1>
                <?php $this->load->view('parsing/back/alert')?>
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <a href="pagecontrol/page/addblog" title="Postingan Baru">
                            <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-plus"></i> Postingan Baru</h6>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th> No </th>
                                        <th> Judul </th>
                                        <th> Tanggal Posting </th>
                                        <th> Option </th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th> No </th>
                                        <th> Judul </th>
                                        <th> Tanggal Posting </th>
                                        <th> Option </th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                        <?php $no=0; foreach( $blog->result() as $blog ) { $no++; ?>
                                        <tr>
                                            <td><?php echo $no?>.</td>
                                            <td> <strong><?php echo $blog->judul?></strong> </td>
                                            <td> <?php echo $blog->tgl_post?> </td>
                                            <td>
                                                <a href="pagecontrol/page/edit_blog/<?php echo $blog->id_blog?>" title="Edit" class="btn btn-warning btn-sm"> <i class="fa fa-trash"></i> Edit</a>
                                                <a href="pagecontrol/page/delete_blog/<?php echo $blog->id_blog?>" title="Hapus" onclick="return confirm('yakin hapus postingan ini?')" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> Hapus</a>
                                            </td>
                                        </tr>
                                        <?php } ?> 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>