<?php 


        if (isset($_GET['page'])){ 
        $page=$_GET['page'];
        
                if(isset($_SESSION['level'])){
                        if($_SESSION['level'] == "1"){
                                if ($page == "beranda")              include("beranda.php");
                                elseif ($page == "add")              include("add.php");
                                elseif ($page == "edit")             include("edit.php");        
                                elseif ($page == "delete")           include("edit.php");
                                elseif ($page == 'tampil')           include("tampil.php");
                                elseif ($page == "user")             include("user.php");
                                elseif ($page == "userdetail")       include("userdetail.php");
                                elseif ($page == "login")            include("login.php");
                                elseif ($page == "profil")           include("profil.php");
                                elseif ($page == "apply")            include("apply.php");
                                elseif ($page == "editapply")        include("editapply.php");
                                elseif ($page == "deleteapply")      include("editapply.php");
                                elseif ($page == "pendaftar")        include("pendaftar.php");
                                elseif ($page == "logout")           include("logout.php");
                                else (include("beranda.php"));
                        }
                        elseif($_SESSION['level'] == "2"){
                                if ($page == "beranda")              include("beranda.php");
                                elseif ($page == 'tampil')           include("tampil.php");
                                elseif ($page == "user")             include("user.php");
                                elseif ($page == "userdetail")       include("userdetail.php");
                                elseif ($page == "login")            include("login.php");
                                elseif ($page == "profil")           include("profil.php");
                                elseif ($page == "apply")            include("apply.php");
                                elseif ($page == "logout")           include("logout.php");
                                else (include("beranda.php"));
                        }
                }else{
                        if ($page == "beranda")              include("beranda.php");
                        elseif ($page == 'tampil')           include("tampil.php");
                        elseif ($page == "user")             include("user.php");
                        elseif ($page == "userdetail")       include("userdetail.php");
                        elseif ($page == "login")            include("login.php");
                        elseif ($page == "profil")           include("profil.php");
                        elseif ($page == "logout")           include("logout.php");
                        else (include("beranda.php"));
                }
        }else (include("beranda.php"));      

?>