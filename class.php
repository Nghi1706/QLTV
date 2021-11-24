<?php
class user{
    function connect(){
        $con=mysqli_connect('localhost','root','','thuvien');
        if(!$con){                
            echo 'Khong ket noi duoc csdl.';
            exit();
        }
        else            {
            mysqli_select_db($con,"utf8");
            return $con;
        }
    }
    function login($sql)
    {
        $link=$this->connect();
        $ketqua=mysqli_query($link,$sql);
        $i=mysqli_num_rows($ketqua);
        if($i>0)
        {
            while($row=mysqli_fetch_array($ketqua))
            {
                $phone=$row['phone'];
                $pass=$row['password'];
                $_SESSION['password']=$pass;
                $_SESSION['phone']=$phone;
            }
        }
    }
    function gui_sp($sql)
    {
        $link=$this->connect();
        $ketqua=mysqli_query($link,$sql);
        $i=mysqli_num_rows($ketqua);
        if($i>0)
        {
            while($row=mysqli_fetch_array($ketqua))
            {
                $name = $row['name'];
                $id_sp = $row['id'];
                $cost = $row['cost'];
                $phone =  $_SESSION['phone'];
                $link_image = $row['link_image'];
                $soluong = $row['soluong'];
                if ($soluong <5)
                {
                    echo '
                    <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                            <a href="#" class="img-prod">
                                <img class="img-fluid" src="'.$link_image.'">
                                <div class="overlay"></div>
                            </a>
                            <div class="text py-3 pb-4 px-3 text-center">
                                <h3><a href="#">'.$name.'</a></h3>
                                <div class="d-flex">
                                    <div class="pricing">
                                        <p class="price"><span class="price-sale">'.$cost.'đ<p style="color :red">hết hàng</p>
                                        </span></p>
                                    </div>
                                </div>
                                <div class="bottom-area d-flex px-3">
                                    <div class="m-auto d-flex">
                                        <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                            <span><i class="ion-ios-cart"></i></span>
                                        </a>
                                        <a href="./wish.php?id_user='.$phone.'&id_sp='.$id_sp.'" class="heart d-flex justify-content-center align-items-center ">
                                            <span><i class="ion-ios-heart"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                    </div>
                        				
    			</div>
                        ';
                }
                else echo '
                <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
    					<a href="#" class="img-prod">
                <img class="img-fluid" src="'.$link_image.'">
    					<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">'.$name.'</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="price-sale">'.$cost.'đ
                                    </span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="./cd.php?id_user='.$phone.'&id_sp='.$id_sp.'" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="./wish.php?id_user='.$phone.'&id_sp='.$id_sp.'" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
                        				
    			</div>
                    ';
            }
        }
        else echo"không có sản phẩm";
    }
    function guiad_sp($sql)
    {
        $link=$this->connect();
        $ketqua=mysqli_query($link,$sql);
        $i=mysqli_num_rows($ketqua);
        if($i>0)
        {
            while($row=mysqli_fetch_array($ketqua))
            {
                $name = $row['name'];
                $id_sp = $row['id'];
                $cost = $row['cost'];
                $phone =  $_SESSION['phone'];
                $link_image = $row['link_image'];
                $soluong = $row['soluong'];
                if ($soluong <5)
                {
                    echo '
                    <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                            <a href="#" class="img-prod">
                                <img class="img-fluid" src="'.$link_image.'">
                                <div class="overlay"></div>
                            </a>
                            <div class="text py-3 pb-4 px-3 text-center">
                                <h3><a href="">'.$name.'</a></h3>
                                <div class="d-flex">
                                    <div class="pricing">
                                        <p class="price"><span class="price-sale">'.$cost.'đ<p style="color :red">hết hàng</p>
                                        </span></p>
                                    </div>
                                </div>
                            </div>
                    </div>
                        				
    			</div>
                        ';
                }
                else echo '
                <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
    					<a href="#" class="img-prod">
                <img class="img-fluid" src="'.$link_image.'">
    					<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">'.$name.'</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="price-sale">'.$cost.'đ
                                    </span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="./cd.php?id_user='.$phone.'&id_sp='.$id_sp.'" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="./wish.php?id_user='.$phone.'&id_sp='.$id_sp.'" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
                        				
    			</div>
                    ';
            }
        }
        else echo"không có sản phẩm";
    }
    function cart_sp($sql)
    {
        $link=$this->connect();
        $ketqua=mysqli_query($link,$sql);
        $i=mysqli_num_rows($ketqua);
        $total = 0;
        if($i>0)
        {
            while($row=mysqli_fetch_array($ketqua))
            {
                $id= $row['id'];
                $name = $row['name'];
                $cost = $row['cost'];
                $total +=$cost;
                $link_image = $row['link_image'];
                    echo '
                    <tr class="text-center">
						        <td class="product-remove"><a href="del.php?id='.$id.'&del=cart"><span class="ion-ios-close"></span></a></td>
						        
						        <td class="image-prod"></td>
						        
						        <td class="product-name">
						        	<h3>'.$name.'</h3>
						        </td>
						        
						        <td class="price">'.$cost.'đ</td>
						        
					            </td>
		
						        <td class="total">'.$total.'đ</td>
					</tr>
                    ';
            }
        }
        else echo"không có sản phẩm";
    }
    function wish_sp($sql)
    {
        $link=$this->connect();
        $ketqua=mysqli_query($link,$sql);
        $i=mysqli_num_rows($ketqua);
        $total = 0;
        if($i>0)
        {
            while($row=mysqli_fetch_array($ketqua))
            {
                $id= $row['id'];
                $name = $row['name'];
                $cost = $row['cost'];
                $total +=$cost;
                $link_image = $row['link_image'];
                    echo '
                    <tr class="text-center">
						        <td class="product-remove"><a href="del.php?id='.$id.'&del=wislist"><span class="ion-ios-close"></span></a></td>
						        
						        <td class="image-prod"></td>
						        
						        <td class="product-name">
						        	<h3>'.$name.'</h3>
						        </td>
						        
						        <td class="price">'.$cost.'đ</td>
						        
					            </td>
		
						        <td class="total">'.$total.'đ</td>
					</tr>
                    ';
            }
        }
        else echo"không có sản phẩm";
    }
    function QL_sp($sql)
    {
        $link=$this->connect();
        $ketqua=mysqli_query($link,$sql);
        $i=mysqli_num_rows($ketqua);
        if($i>0)
        {
            while($row=mysqli_fetch_array($ketqua))
            {
                $id= $row['id'];
                $name = $row['name'];
                $cost = $row['cost'];
                $link_image = $row['link_image'];
                $SL = $row['soluong'];
                $ncc = $row['tên nhà cung cấp'];
                    echo '
                    <tr class="text-center">
						        <td class="product-remove"><a href="./del.php?id='.$id.'&del=sanpham"><span class="ion-ios-close"></span></a></td>
						        <td><img src="'.$link_image.'" alt="" style="width : 50px"></td>
						        <td class="product-name">'.$name.'</td>
						        <td class="price">'.$cost.'đ</td>
						        <td>'.$ncc.'</td>
                    <td>'.$SL.'</td>
                    <td><a href="edit_sanpham.php?id='.$id.'"><button type="button" class="btn btn-primary">Sửa</button></a></td>
					      </tr>
                    ';
            }
        }
        else echo"không có sản phẩm";
    }
    function show_sp($sql)
    {
        $link=$this->connect();
        $ketqua=mysqli_query($link,$sql);
        $i=mysqli_num_rows($ketqua);
        if($i>0)
        {
            while($row=mysqli_fetch_array($ketqua))
            {
                $id= $row['id'];
                $name = $row['name'];
                $cost = $row['cost'];
                $SL = $row['soluong'];
                    echo '
                    <form class="col-7" action="edit.php" method="get">
                    <div class="mb-3">
                            <label class="form-label">ID sản phẩm</label>
                            <input type="hidden" name ="id" id="id" value="'.$id.'" class="form-control"/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tên sản phẩm</label>
                            <input type="text" name ="name" id="name"required placeholder="'.$name.'" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Giá</label>
                            <input type="number" id="cost" name="cost" required placeholder="'.$cost.'đ" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Số Lượng</label>
                            <input type="number" id="sl" name="sl" required placeholder="'.$SL.'" class="form-control">
                        </div>
                     <input type="submit" value="submit" name="submit" id="submit"  class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;"/>

                    </form>
                    ';
            }
        }
        else echo"không có sản phẩm";
    }
    function QL_kh($sql)
    {
        $link=$this->connect();
        $ketqua=mysqli_query($link,$sql);
        $i=mysqli_num_rows($ketqua);
        if($i>0)
        {
            while($row=mysqli_fetch_array($ketqua))
            {
                $id= $row['phone'];
                $name = $row['name'];
                $cost = $row['address'];
                    echo '
                    <tr class="text-center">
						        <td class="product-remove"><a href="./del.php?id='.$id.'&del=guest_login"><span class="ion-ios-close"></span></a></td>
                                                    <td class="product-name">'.$name.'</td>
                                                    <td class="product-name">0'.$id.'</td>

						        <td class="price">'.$cost.'</td>
                    <td><a href="edit_khachhang.php?id='.$id.'"><button type="button" class="btn btn-primary">Sửa</button></a></td>
					      </tr>
                    ';
            }
        }
        else echo"không có sản phẩm";
    }
    function show_kh($sql)
    {
        $link=$this->connect();
        $ketqua=mysqli_query($link,$sql);
        $i=mysqli_num_rows($ketqua);
        if($i>0)
        {
            while($row=mysqli_fetch_array($ketqua))
            {
                $id= $row['phone'];
                $name = $row['name'];
                $cost = $row['address'];
                $SL = $row['password'];
                    echo '
                    <form class="col-7" action="edit_hk.php" method="get">
                    <div class="mb-3">
                            <label class="form-label">SDT</label>
                            <input type="hidden" name ="id" id="id" value="'.$id.'" class="form-control"/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tên khách hàng</label>
                            <input type="text" name ="name" id="name"required placeholder="'.$name.'" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Địa chỉ</label>
                            <input type="text" id="cost" name="address" required placeholder="'.$cost.'" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="number" id="sl" name="sl" required placeholder="'.$SL.'" class="form-control">
                        </div>
                     <input type="submit" value="submit" name="submit" id="submit"  class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;"/>

                    </form>
                    ';
            }
        }
        else echo"không có sản phẩm";
    }
    function show_nv($sql)
    {
        $link=$this->connect();
        $ketqua=mysqli_query($link,$sql);
        $i=mysqli_num_rows($ketqua);
        if($i>0)
        {
            while($row=mysqli_fetch_array($ketqua))
            {
                $id= $row['phone'];
                $name = $row['name'];
                $cost = $row['address'];
                $SL = $row['password'];
                    echo '
                    <form class="col-7" action="edit_nv.php" method="get">
                    <div class="mb-3">
                            <label class="form-label">SDT</label>
                            <input type="hidden" name ="id" id="id" value="'.$id.'" class="form-control"/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tên nhân viên</label>
                            <input type="text" name ="name" id="name"required placeholder="'.$name.'" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Địa chỉ</label>
                            <input type="text" id="cost" name="address" required placeholder="'.$cost.'" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="number" id="sl" name="sl" required placeholder="'.$SL.'" class="form-control">
                        </div>
                     <input type="submit" value="submit" name="submit" id="submit"  class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;"/>

                    </form>
                    ';
            }
        }
        else echo"không có sản phẩm";
    }
    function QL_nv($sql)
    {
        $link=$this->connect();
        $ketqua=mysqli_query($link,$sql);
        $i=mysqli_num_rows($ketqua);
        if($i>0)
        {
            while($row=mysqli_fetch_array($ketqua))
            {
                $id= $row['phone'];
                $name = $row['name'];
                $cost = $row['address'];
                    echo '
                    <tr class="text-center">
						        <td class="product-remove"><a href="./del.php?id='.$id.'&del=employee_login"><span class="ion-ios-close"></span></a></td>
                                                    <td class="product-name">'.$name.'</td>
                                                    <td class="product-name">0'.$id.'</td>

						        <td class="price">'.$cost.'</td>
                    <td><a href="edit_nhanvien.php?id='.$id.'"><button type="button" class="btn btn-primary">Sửa</button></a></td>
					      </tr>
                    ';
            }
        }
        else echo"không có sản phẩm";
    }
    function doanhthu($sql)
    {
        $link=$this->connect();
        $ketqua=mysqli_query($link,$sql);
        $i=mysqli_num_rows($ketqua);
        $total =0;
        if($i>0)
        {
            while($row=mysqli_fetch_array($ketqua))
            {
                $date= $row['date'];
                $cost = $row['cost'];
                $total += $cost; 
                    echo '
                    <tr class="text-center">
						    
                        <td class="product-name">'.$date.'</td>
                        <td class="product-name">'.$cost.'đ</td>
                        <td class="product-name">'.$total.'đ</td>
					</tr>
                    ';
            }
        }
        else echo"không có sản phẩm";
    }
    function bill($sql)
    {
        $link=$this->connect();
        $ketqua=mysqli_query($link,$sql);
        $i=mysqli_num_rows($ketqua);
        $total =0;
        if($i>0)
        {
            while($row=mysqli_fetch_array($ketqua))
            {
                $name= $row['name'];
                $phone= $row['phone'];
                $address = $row['address'];
                $cost = $row['cost'];
                $date = $row['date'];
                echo'
                <div >
	    				    <div class="col-7">
                            <p>Họ và tên : '.$name.'</p>
                            <p>SDT : 0'.$phone.'</p>
                            <p>địa chỉ : '.$address.'</p>
                          <p>tổng tiền : '.$cost.'</p>
                        </div>
                        <hr>
                ';
            }
        }
        else echo"không có sản phẩm";
    }
    function edit($sql){
		$link = $this -> connect();
		if(mysqli_query($link,$sql))
		{
			return 1;
		}
		else{
			return 0;
		}
	}
}
?>