<?php
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['login'])) {
            include('connection.php');

            $uname = mysqli_real_escape_string($dbc, $_POST['uname']);
            $email = mysqli_real_escape_string($dbc, $_POST['email']);
            $pass = mysqli_real_escape_string($dbc, $_POST['psw']);
            
            $stmt = $dbc->prepare('SELECT * FROM registration WHERE username = ?');
            $stmt->bind_param('s', $uname); // 's' specifies the variable type => 'string'

            $stmt->execute();

            $result = $stmt->get_result();

            if($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                $dbmail = $row['email'];
                $dbuname = $row['username'];
                $dbpass = $row['password'];
                $_SESSION['uname'] = $uname;

                if ($email == $dbmail) {
                    if (password_verify($pass, $dbpass)) {
                        if ($uname == $dbuname) {
                            $stmt->close();
                            header('Location: profile.php?uname='.$_SESSION['uname']);
                        } else {
                            if (isset($_POST['uname'])) {
                              $email = null;
                              session_destroy();
                            }
                            $stmt->close();
                            echo "<script>
                                    alert('Wrong Username!!');
                                      window.location.href = 'homepage.php';
                                </script>";
                                exit;
                        }
                    } else {
                            if (isset($_POST['uname'])) {
                              $email = null;
                              session_destroy();
                            }
                            $stmt->close();
                            echo "<script>
                                    alert('Wrong Password!!');
                                      window.location.href = 'homepage.php';
                                </script>";
                                exit;
                    }
                } else {
                      if (isset($_POST['uname'])) {
                              $email = null;
                              session_destroy();
                            }
                            $stmt->close();
                            echo "<script>
                                    alert('Wrong E-mail Id!!');
                                      window.location.href = 'homepage.php';
                                </script>";
                                exit;
                }
              }
            } else {
                $stmt->close();
                echo "<script>
                      alert('You have to register first!!');
                            window.location.href = 'homepage.php'; 
                      </script>";
            }

           // $query = mysqli_query($dbc, "SELECT * FROM registration WHERE username='".$uname."'");
           // $num_row = mysqli_num_rows($query);
           // $myQuery = "SELECT * FROM registration";

           // if($num_row == 1) {
           //     while ($row = mysqli_fetch_assoc($query)) {
           //         $dbmail = $row['email'];
           //         $dbuname = $row['username'];
           //         $dbpass = $row['password'];
           //         $_SESSION['uname'] = $uname;
//
           //         if ($email == $dbmail) {
           //             if (password_verify($pass, $dbpass)) {
           //                 if ($uname == $dbuname) {
           //                     header('Location: profile.php?uname='.$_SESSION['uname']);
           //                 } else {
           //                     echo "<script> alert('Wrong username!!');
           //                                    window.location.href = 'homepage.php';
           //                          </script>";
           //                 }
           //             } else {
           //                // echo "Wrong password!!";
           //                // echo $pass;
           //                // echo "<br>";
           //                // echo $dbpass;
           //                 echo "<script> alert('Wrong Password!!');
           //                         window.location.href = 'homepage.php'; 
           //                     </script>";
           //             }
           //         } else {
           //             echo "<script> alert('Wrong E-mail id!!');
           //                     window.location.href = 'homepage.php'; 
           //                 </script>";
           //         }
           //     }
           // }
           // else {
           //     echo "<script>
           //           alert('You have to register first!!');
           //           window.location.href = 'homepage.php';
           //           </script>";
           // }
        }
    }
?>