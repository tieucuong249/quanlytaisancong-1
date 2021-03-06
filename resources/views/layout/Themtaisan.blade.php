@extends('home')
@section('themtaisan')
    <div class="col-sm-12" style="min-height: 665px; background-color: white;">
        <div class="main_ward">
            <div class="main-name">
                <h3 class="main-text" style="margin:auto;">Thông tin tài sản</h3>
                
            </div>
            <div class="row">
                <form>
                    <div class="col-sm-12 ">
                        <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="" class="form-label sl_lb">Mã tài sản:</label>
                                        <div class="form-wrap">
                                            <div class="form_input">
                                                <input type="text" class="form-input sl" name="ma_ts" onkeyup="check('.sl_lb')" value="" style="text-align: right;" placeholder="Nhập vào nguyên giá">
                                            </div>
                                            <div style="display: flex;">
                                                <i class='bx bxs-error-circle sl_icon' style="display: none;position: relative;top: 6px;left: 10px;color: red;font-size: 1.8rem;padding-right: 5px;"></i>
                                                <span class="error_sl error"></span>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="form-group">
                                        <label for="" class="form-label">Loại tài sản:</label>
                                        <div class="form-wrap">
                                            <div class="form_input">
                                                <div class="select_wrap form_input--items" style="width: 100%;">
                                                    <select class=" select select-loaisp form-control" id="loaisp" name ="tieuhao" data-dropup-auto="false" data-size='5' data-live-search="true">
                                                        <option value="">Tài sản A</option>
                                                            <option value="">1</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div style="display: flex;">
                                                <i class='bx bxs-error-circle loaisp_icon' style="display: none;position: relative;top: 6px;left: 10px;color: red;font-size: 1.8rem;padding-right: 5px;"></i>
                                                <span class="error_loaisp error"></span>
                                            </div>
                                        </div>
                                    </div>  
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="" class="form-label sl_lb">Tên tài sản:</label>
                                <div class="form-wrap">
                                    <div class="form_input">
                                        <input type="text" class="form-input sl" name="ten_taisan" onkeyup="check('.sl_lb')" value="" style="text-align: right;" placeholder="Nhập vào nguyên giá">
                                    </div>
                                    <div style="display: flex;">
                                        <i class='bx bxs-error-circle sl_icon' style="display: none;position: relative;top: 6px;left: 10px;color: red;font-size: 1.8rem;padding-right: 5px;"></i>
                                        <span class="error_sl error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label sl_lb">Số lượng:</label>
                                <div class="form-wrap">
                                    <div class="form_input">
                                        <input type="text" class="form-input sl" name="so_luong" onkeyup="check('.sl_lb')" value="" style="text-align: right;" placeholder="Nhập vào nguyên giá">
                                    </div>
                                    <div style="display: flex;">
                                        <i class='bx bxs-error-circle sl_icon' style="display: none;position: relative;top: 6px;left: 10px;color: red;font-size: 1.8rem;padding-right: 5px;"></i>
                                        <span class="error_sl error"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group" style="">
                        <label for="" class="form-label">Mô tả tài sản:</label>
                        <div class="form-wrap" style="background-color: #ffff; width:60%; float:left;">
                            <textarea id='mota' name="mota" style="display: block; font-size: 1.2rem;padding: 10px;" name="" id="" cols="50" rows="10"></textarea>
                        </div>
                    </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-12">
                        <br>
                        <input type="button" value="Cập nhật" style="margin-left:1%; width: 100px; font-size:20px; height: 40px; ">
                    </div>
                </form>
                <div class="main-name">
                    <h3 class="main-text" style="margin-left:2%;">Thêm chi tiết tài sản</h3>
                    <div>
                        <button type="button" data-toggle="modal" data-target="#Themchitiet" class="btn_cus btn-addsp"><i class='bx bx-plus' style="font-weight: 600; "></i>
                            Thêm chi tiết
                          </button>
                    </div>
                </div>
                <div class="col-sm-12 ">
                    <table class="table table_sp ">
                        <thead class="heading-table">
                            <tr>
                                <th style="border-left: 1px solid rgba(0,0,0,.1); width:10px;">STT</th>
                                <th style="width: 80px;">Mã tài sản</th>
                                <th style="width: 120px;">Tên tài sản</th>
                                <th style="width: 80px;">Loại tài sản</th>
                                <th style="width: 70px;">Số serial</th>
                                <th style="width: 80px;">Nguyên giá</th>
                                <th style="width: 80px;">Tiêu hao</th>
                                <th style="width: 80px;">Nhà cung cấp</th>
                                <th style="width: 80px;">Ngày mua</th>
                                <th style="width: 80px;">Nơi mua</th>
                                <th style="width: 80px;">Nơi Sản Xuất</th>
                                <th style="width: 80px;">Trạng thái</th>
                                <th style="width: 80px;">Người sử dụng</th>
                                <th style="width: 80px;border-right: none;">Đơn vị quản lý</th>
                            </tr>
                        </thead>
                        <tbody id="list_product">
                           
                        </tbody>
                    </table>
                    <!-- Thêm chi tiết-->
                    <style>
                        .stylelabel{
                            font-size: 20px;
                            margin-left:2%; 
                            margin-top:4px;
                        }
                        .styleinput{
                            width: 90%;
                            height:30px;
                            margin-left:5%;
                        }
                        .styleselect{
                            width: 90%; 
                            height:30px ;
                            margin-left:5%;
                            font-size: 15px;
                        }
                        #mota{
                            width:120%;
                            height: 400%;
                        }
                    </style>
                    <div class="modal fade" id="Themchitiet" tabindex="-1" role="dialog" aria-labelledby="Thiemchitiet" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Thêm chi tiết</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form action="">
                                    <div class="form-group">
                                        <label for="" class="form-label sl_lb">Nguyên giá:</label>
                                        <div class="form-wrap">
                                            <div class="form_input">
                                                <input type="text" class="form-input sl" name="nguyengia" onkeyup="check('.sl_lb')" value="" style="text-align: right;" placeholder="Nhập vào nguyên giá">
                                            </div>
                                            <div style="display: flex;">
                                                <i class='bx bxs-error-circle sl_icon' style="display: none;position: relative;top: 6px;left: 10px;color: red;font-size: 1.8rem;padding-right: 5px;"></i>
                                                <span class="error_sl error"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="form-label">Tiêu hao:</label>
                                        <div class="form-wrap">
                                            <div class="form_input">
                                                <div class="select_wrap form_input--items" style="width: 100%;">
                                                    <select class=" select select-loaisp form-control" id="loaisp" name ="tieuhao" data-dropup-auto="false" data-size='5' data-live-search="true">
                                                        <option value="">--Chọn tiêu hao--</option>
                                                            <option value="">1</option>
                                                    </select>
                                                    
                                                </div>
                                            </div>
                                            <div style="display: flex;">
                                                <i class='bx bxs-error-circle loaisp_icon' style="display: none;position: relative;top: 6px;left: 10px;color: red;font-size: 1.8rem;padding-right: 5px;"></i>
                                                <span class="error_loaisp error"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="form-label">Nhà cung cấp:</label>
                                        <div class="form-wrap">
                                            <div class="form_input">
                                                <div class="select_wrap form_input--items" style="width: 100%;">
                                                    <select class=" select select-loaisp form-control" id="loaisp" name ="ncc" data-dropup-auto="false" data-size='5' data-live-search="true">
                                                        <option value="">--Chọn nhà cung cấp--</option>
                                                            <option value="">1</option>
                                                    </select>
                                                    
                                                </div>
                                            </div>
                                            <div style="display: flex;">
                                                <i class='bx bxs-error-circle loaisp_icon' style="display: none;position: relative;top: 6px;left: 10px;color: red;font-size: 1.8rem;padding-right: 5px;"></i>
                                                <span class="error_loaisp error"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="" class="form-label sl_lb">Ngày mua:</label>
                                        <div class="form-wrap">
                                            <div class="form_input">
                                                <input type="text" class="form-input sl" name="ngaymua" onkeyup="check('.sl_lb')" value="" style="text-align: right;" placeholder="Nhập vào ngày mua">
                                            </div>
                                            <div style="display: flex;">
                                                <i class='bx bxs-error-circle sl_icon' style="display: none;position: relative;top: 6px;left: 10px;color: red;font-size: 1.8rem;padding-right: 5px;"></i>
                                                <span class="error_sl error"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="form-label sl_lb">Nơi mua:</label>
                                        <div class="form-wrap">
                                            <div class="form_input">
                                                <input type="text" class="form-input sl" name="noimua" onkeyup="check('.sl_lb')" value="" style="text-align: right;" placeholder="Nhập vào nơi mua">
                                            </div>
                                            <div style="display: flex;">
                                                <i class='bx bxs-error-circle sl_icon' style="display: none;position: relative;top: 6px;left: 10px;color: red;font-size: 1.8rem;padding-right: 5px;"></i>
                                                <span class="error_sl error"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="form-label sl_lb">Nơi sản xuất:</label>
                                        <div class="form-wrap">
                                            <div class="form_input">
                                                <input type="text" class="form-input sl" name="noi_sx" onkeyup="check('.sl_lb')" value="" style="text-align: right;" placeholder="Nhập vào nơi sản xuất">
                                            </div>
                                            <div style="display: flex;">
                                                <i class='bx bxs-error-circle sl_icon' style="display: none;position: relative;top: 6px;left: 10px;color: red;font-size: 1.8rem;padding-right: 5px;"></i>
                                                <span class="error_sl error"></span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="" class="form-label">Trạng thái:</label>
                                        <div class="form-wrap">
                                            <div class="form_input">
                                                <div class="select_wrap form_input--items" style="width: 100%;">
                                                    <select class=" select select-loaisp form-control" id="loaisp" name ="trangthai" data-dropup-auto="false" data-size='5' data-live-search="true">
                                                        <option value="">--Chọn trạng thái--</option>
                                                            <option value="">1</option>
                                                    </select>
                                                    
                                                </div>
                                            </div>
                                            <div style="display: flex;">
                                                <i class='bx bxs-error-circle loaisp_icon' style="display: none;position: relative;top: 6px;left: 10px;color: red;font-size: 1.8rem;padding-right: 5px;"></i>
                                                <span class="error_loaisp error"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="form-label">Người sử dụng:</label>
                                        <div class="form-wrap">
                                            <div class="form_input">
                                                <div class="select_wrap form_input--items" style="width: 100%;">
                                                    <select class=" select select-loaisp form-control" id="loaisp" name ="nguoisd" data-dropup-auto="false" data-size='5' data-live-search="true">
                                                        <option value="">--Chọn người sử dụng--</option>
                                                            <option value="">1</option>
                                                    </select>
                                                    
                                                </div>
                                            </div>
                                            <div style="display: flex;">
                                                <i class='bx bxs-error-circle loaisp_icon' style="display: none;position: relative;top: 6px;left: 10px;color: red;font-size: 1.8rem;padding-right: 5px;"></i>
                                                <span class="error_loaisp error"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="form-label">Đơn vị quản lý:</label>
                                        <div class="form-wrap">
                                            <div class="form_input">
                                                <div class="select_wrap form_input--items" style="width: 100%;">
                                                    <select class=" select select-loaisp form-control" id="loaisp" name ="dvql" data-dropup-auto="false" data-size='5' data-live-search="true">
                                                        <option value="">--Chọn đơn vị quản lý--</option>
                                                            <option value="">1</option>
                                                    </select>
                                                    
                                                </div>
                                            </div>
                                            <div style="display: flex;">
                                                <i class='bx bxs-error-circle loaisp_icon' style="display: none;position: relative;top: 6px;left: 10px;color: red;font-size: 1.8rem;padding-right: 5px;"></i>
                                                <span class="error_loaisp error"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                <button type="button" class="btn btn-primary">Thêm chi tiét</button>
                            </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
            </div>
        </div>
    </div>
@endsection