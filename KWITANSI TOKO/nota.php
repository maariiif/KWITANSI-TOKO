<html>
    <head>
        <title>Percobaan 9 | 2110151046</title>
    </head>
    <body>
        <table>
            <tr>
                <td>
                    <a href="sc2.txt">
                    <button>Source Code</button>
                    </a>
                </td>
            </tr>
        </table>
        <hr>
        <h1 align="center"> NOTA PEMBAYARAN </h1>
        <hr>
        <form align="center">
            <table align="center">
                <tr>
                    <td>
                        <?php
                            $total = 0;

                            if (empty($_POST['prod']))
                            {
                                echo "Tidak ada barang yang dibeli !!!";
                                echo "<hr>";
                            }
                            else if(isset($_POST['prod']))
                            {
                                $product = $_POST['prod'];

                                echo "Produk yang dibeli : ";
                                echo "<table>";
                                foreach ($product as $key => $value)
                                {
                                    echo "<tr><td>".$key."</td><td>    </td><td> Rp. ".number_format(floatval($value), 0, ' ', '.').",- </td><tr>";
                                    $total += intval($value);
                                }
                                echo "</table>";
                                echo "<hr>";
                            }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <?php
                            if (empty($_POST['id_cstmr']) && empty($_POST['nama']) && empty($_POST['mail']) && empty($_POST['address']) && empty($_POST['member']) && empty($_POST['pbayar']))
                            {
                                echo "TIDAK DAPAT MEMBELI !!! Data Harus Lengkap !!! <br>";
                            }
                            else
                            {
                                echo "Data Customer : ";

                                //id customer
                                if(!empty($_POST['id_cstmr']) && !ereg('[^0-9]', $_POST['id_cstmr']))
                                {
                                    echo "<tr><td> ID Customer</td><td> : </td><td>".$_POST['id_cstmr']."</td></tr>";
                                }
                                else
                                {
                                    echo "<tr><td> ID Customer</td><td> : </td><td>  <strong>INVALID !!! <i>(hanya angka)</i></strong></td>";
                                }

                                //nama
                                if(!empty($_POST['nama']))
                                {
                                    echo "<tr><td> Nama</td><td> : </td><td>".$_POST['nama']."</td></tr>";
                                }
                                else
                                {
                                    echo "<tr><td> Nama</td><td> : </td><td>  <strong>INVALID !!!</strong></td></tr>";
                                }

                                //email
                                if(!empty($_POST['mail']) && eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $_POST['mail']))
                                {
                                    echo "<tr><td> Email</td><td> : </td><td>".$_POST['mail']."</td></tr>";
                                }
                                else
                                {
                                    echo "<tr><td> Email</td><td> : </td><td>  <strong>INVALID !!! <i>(ex : contoh@email.com)</i></strong></td></tr>";
                                }

                                //alamat
                                if(!empty($_POST['address']))
                                {
                                    echo "<tr><td> Alamat</td><td> : </td><td>".$_POST['address']."</td></tr>";
                                }
                                else
                                {
                                    echo "<tr><td> Alamat</td><td> : </td><td>  <strong>INVALID !!!</strong></td></tr>";
                                }

                                //member
                                if(isset($_POST['member']))
                                {
                                    if($_POST['member'] == 2)
                                        $stat = "Member";
                                    else if($_POST['member'] == 1)
                                        $stat = "Bukan Member";
                                    else
                                    {
                                        $stat = "   INVALID !!!";
                                    }
                                    echo "<tr><td> Member</td><td> : </td><td>".$stat."</td></tr>";
                                }
                                else
                                {
                                    echo "<tr><td> Member</td><td> : </td><td>  <strong>INVALID !!!</strong></td></tr>";
                                }

                                //pembayaran
                                if(isset($_POST['pbayar']))
                                {
                                    if($_POST['pbayar'] == 1)
                                        $card = "VISA";
                                    else if($_POST['pbayar'] == 2)
                                        $card = "Master Card";
                                    else if($_POST['pbayar'] == 3)
                                        $card = "Debit BCA";
                                    echo "<tr><td> Pembayaran</td><td> : </td><td>".$card."</td></tr>";
                                }
                                else
                                {
                                    echo "<tr><td> Pembayaran</td><td> : </td><td>  <strong>INVALID !!!</strong></td></tr>";
                                }

                                //Total Harga
                                if($total != 0)
                                {
                                    echo "<tr><td> Total Harga</td><td> : </td><td> Rp. ".number_format(floatval($total), 0, ' ', '.').",- </td></tr>";
                                }
                                else
                                {
                                    echo "<tr><td> Total Harga</td><td> : </td><td>  Rp. 0,-</td></tr>";
                                }

                                echo "<tr><td></td><td></td><td><hr></td></tr>";
                                if(isset($_POST['member']))
                                {
                                    if($_POST['member'] == 2)
                                    {
                                        echo "<tr><td>Diskon member 10%</td></tr>";
                                        echo "<tr><td>Pembayaran Akhir </td><td> : </td><td> Rp. ".number_format(floatval(0.9 * $total), 0, ' ', '.').",- </td></tr>";
                                    }
                                    else if($_POST['member'] == 1)
                                    {
                                        echo "<tr><td>Pembayaran Akhir </td><td> : </td><td> Rp. ".number_format(floatval($total), 0, ' ', '.').",- </td></tr>";
                                    }
                                }
                                echo "<tr><td><hr></td></tr><tr><td><h5><strong>Terima Kasih !!!</strong></h5></td></tr>";
                            }
                         ?>
                    </td>
                </tr>
                <tr>
                    <td>
        <button type="submit" formaction="index.html">Kembali</button>
                    </td>
                </tr>
            </table>
        </form>
        <hr>
        <h6 align="center">editor By. Ma'arif  |  2110151046  |  <i>maarif46@it.student.pens.ac.id</i></h6>
    </body>
</html>