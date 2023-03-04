
<?php

include "../conexao.php";

if($_FILES['imgaluno']['type'] == 'image/jpeg'){
        
    $nome_img = md5($_FILES['imgaluno']['name'].rand(1,999)).'.jpg';

    if(isset($_FILES['imgaluno'])){
        move_uploaded_file($_FILES['imgaluno']['tmp_name'], "../assets/user/".$nome_img); //efetua o upload do arquivo


        $nome = $_POST['nome'];
        $bi = $_POST['bi'];
        $novoiduser = $_POST['iduser'];
        $classe = $_POST['classe'];
        $descricao = $_POST['descricao'];
        $curso = $_POST['curso'];

        $sql = "insert into user (nome, bi, iduser, idclasse, descricao, img,idcurso) values ('$nome', '$bi', '$novoiduser','$classe','$descricao','$nome_img','$curso')";

        $criar = mysqli_query($connect,$sql);


        //Adicionar as disciplinas do aluno
        switch($curso):
            //informática
            case 1:
                switch($classe):

                    //Atribuir disciplinas para o aluno da 10ª Classe
                    case 1:
                        //Lingua Portuguêsa 10ª
                        $addisciplinalp = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','3','Língua Portuguesa','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addlp = mysqli_query($connect, $addisciplinalp);

                        //Matemática 10ª
                        $addisciplinamt = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','4','Matemática','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addmt = mysqli_query($connect, $addisciplinamt);

                        //Física 10ª
                        $addisciplinafs = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','5','Física','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addfs = mysqli_query($connect, $addisciplinafs);

                        //Química 10ª
                        $addisciplinaqm = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','6','Química','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addqm = mysqli_query($connect, $addisciplinaqm);

                        //TIC 10ª
                        $addisciplinati = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','7','Tecnologia de Informação e Comunicação','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addti = mysqli_query($connect, $addisciplinati);

                        //TLP 10ª
                        $addisciplinatlp = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','8','Técnica de Linguagem de Programação','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addtlp = mysqli_query($connect, $addisciplinatlp);

                        //SEAC 10ª
                        $addisciplinasc = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','9','Sistema de Exploração Arquitetónica de Computadores','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addsc = mysqli_query($connect, $addisciplinasc);

                        //ET 10ª
                        $addisciplinaet = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','10','Electrotécnia','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addet = mysqli_query($connect, $addisciplinaet);

                        //EF 10ª
                        $addisciplinaef = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','11','Educação Física','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addef = mysqli_query($connect, $addisciplinaef);

                        //emp 10ª
                        $addisciplinaemp = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','12','Empreendedorismo','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addemp = mysqli_query($connect, $addisciplinaemp);

                        //FAI 10ª
                        $addisciplinafai = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','13','Formação de Atitudes Integradoras','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addfai = mysqli_query($connect, $addisciplinafai);

                        //Inglês 10ª
                        $addisciplinaingl = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','14','Inglês','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addingl = mysqli_query($connect, $addisciplinaingl);
                        
                    break;

                    //Atribuir disciplinas para o aluno da 11ª Classe
                    case 2:
                        //Lingua Portuguêsa 11ª
                        $addisciplinalp = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','15','Língua Portuguesa','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addlp = mysqli_query($connect, $addisciplinalp);

                        //Matemática 11ª
                        $addisciplinamt = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','16','Matemática','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addmt = mysqli_query($connect, $addisciplinamt);

                        //Física 11ª
                        $addisciplinafs = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','17','Física','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addfs = mysqli_query($connect, $addisciplinafs);

                        //Química 11ª
                        $addisciplinaqm = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','18','Química','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addqm = mysqli_query($connect, $addisciplinaqm);

                        //DT 11ª
                        $addisciplinadt = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','19','Desenho Técnico','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $adddt = mysqli_query($connect, $addisciplinadt);

                        //TLP 11ª
                        $addisciplinatlp = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','20','Técnica de Linguagem de Programação','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addtlp = mysqli_query($connect, $addisciplinatlp);

                        //ET 11ª
                        $addisciplinaet = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','21','Electrotécnia','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addet = mysqli_query($connect, $addisciplinaet);

                        //EF 11ª
                        $addisciplinaef = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','22','Educação Física','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addef = mysqli_query($connect, $addisciplinaef);

                        //emp 11ª
                        $addisciplinaemp = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','23','Empreendedorismo','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addemp = mysqli_query($connect, $addisciplinaemp);

                        //FAI 11ª
                        $addisciplinafai = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','24','Formação de Atitudes Integradoras','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addfai = mysqli_query($connect, $addisciplinafai);

                        //Inglês 11ª
                        $addisciplinaingl = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','25','Inglês','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addingl = mysqli_query($connect, $addisciplinaingl);
                        break;

                    //Atribuir disciplinas para o aluno da 12ª Classe
                    case 3:
                        //Lingua Portuguêsa 11ª
                        $addisciplinalp = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','26','Língua Portuguesa','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addlp = mysqli_query($connect, $addisciplinalp);

                        //Matemática 11ª
                        $addisciplinamt = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','27','Matemática','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addmt = mysqli_query($connect, $addisciplinamt);

                        //Física 11ª
                        $addisciplinafs = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','28','Física','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addfs = mysqli_query($connect, $addisciplinafs);

                        //OGI 11ª
                        $addisciplinaog = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','29','Organização e Gestão Industrial','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $adog = mysqli_query($connect, $addisciplinaog);

                        //TLP 12ª
                        $addisciplinatlp = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','30','Técnica de Linguagem de Programação','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addtlp = mysqli_query($connect, $addisciplinatlp);

                        //TREI 12ª
                        $addisciplinatr = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','31','Electrotécnia','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addtr = mysqli_query($connect, $addisciplinatr);

                        //EF 12ª
                        $addisciplinaef = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','32','Educação Física','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addef = mysqli_query($connect, $addisciplinaef);

                        //EMP 12ª
                        $addisciplinaemp = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','33','Empreendedorismo','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addemp = mysqli_query($connect, $addisciplinaemp);

                        //Inglês Técnico 12ª
                        $addisciplinainglt = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','34','Inglês Técnico','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addinglt = mysqli_query($connect, $addisciplinainglt);

                        //PT 12ª
                        $addisciplinaept = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','35','Projecto Tecnológico','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addept = mysqli_query($connect, $addisciplinaept);
                        break;

                    //Atribuir disciplinas para o aluno da 13ª Classe
                    case 4:

                        //PT 12ª
                        $addisciplinaept = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','36','Projecto Tecnológico','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addept = mysqli_query($connect, $addisciplinaept);

                        //Estágio 12ª
                        $addisciplinaestg = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','37','Estágio','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addestg = mysqli_query($connect, $addisciplinaestg);
                        break;

                endswitch;
            break;
            //Electronica
            case 2:
                switch($classe):
                    //Atribuir disciplinas para o aluno da 10ª Classe
                    case 5:
                        //Lingua Portuguêsa 10ª
                        $addisciplinalp = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','38','Língua Portuguesa','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addlp = mysqli_query($connect, $addisciplinalp);

                        //Matemática 10ª
                        $addisciplinamt = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','39','Matemática','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addmt = mysqli_query($connect, $addisciplinamt);

                        //Qui 10ª
                        $addisciplinafs = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','40','Química','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addfs = mysqli_query($connect, $addisciplinafs);

                        //Fis 10ª
                        $addisciplinaqm = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','41','Física','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addqm = mysqli_query($connect, $addisciplinaqm);

                        //Ingl 10ª
                        $addisciplinati = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','42','Inglês','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addti = mysqli_query($connect, $addisciplinati);

                        //IP 10ª
                        $addisciplinatlp = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','43','Introdução a Programação','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addtlp = mysqli_query($connect, $addisciplinatlp);

                        //Tl 10ª
                        $addisciplinasc = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','44','Telecomunicação','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addsc = mysqli_query($connect, $addisciplinasc);

                        //Et 10ª
                        $addisciplinaet = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','45','Eletricidade Electrónica','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addet = mysqli_query($connect, $addisciplinaet);

                        //PO 10ª
                        $addisciplinaef = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','46','Práticas Oficinas','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addef = mysqli_query($connect, $addisciplinaef);

                        //FAI 10ª
                        $addisciplinaemp = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','47','Formação de Atitudes Integradoras','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addemp = mysqli_query($connect, $addisciplinaemp);

                        //RE 10ª
                        $addisciplinafai = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','48','Reparação de Eletrodomésticos','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addfai = mysqli_query($connect, $addisciplinafai);

                        //EF 10ª
                        $addisciplinaingl = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','49','Educação Física','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addingl = mysqli_query($connect, $addisciplinaingl);
                        
                    break;

                    //Atribuir disciplinas para o aluno da 11ª Classe
                    case 6:
                        //Lingua Portuguêsa 11ª
                        $addisciplinalp = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','50','Língua Portuguesa','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addlp = mysqli_query($connect, $addisciplinalp);

                        //Matemática 11ª
                        $addisciplinamt = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','51','Matemática','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addmt = mysqli_query($connect, $addisciplinamt);

                        //Quimi 11ª
                        $addisciplinafs = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','52','Química','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addfs = mysqli_query($connect, $addisciplinafs);

                        //Fís 11ª
                        $addisciplinaqm = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','53','Física','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addqm = mysqli_query($connect, $addisciplinaqm);

                        //Ingl 11ª
                        $addisciplinadt = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','54','Inglês','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $adddt = mysqli_query($connect, $addisciplinadt);

                        //Pgr 11ª
                        $addisciplinatlp = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','55','Programação II','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addtlp = mysqli_query($connect, $addisciplinatlp);

                        //RDC 11ª
                        $addisciplinaet = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','56','Redes de Computadores','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addet = mysqli_query($connect, $addisciplinaet);

                        //SD 11ª
                        $addisciplinaef = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','57','Sistemas Digitais','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addef = mysqli_query($connect, $addisciplinaef);

                        //DT 11ª
                        $addisciplinaemp = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','58','Desenho Técnico','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addemp = mysqli_query($connect, $addisciplinaemp);

                        //EE 11ª
                        $addisciplinafai = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','59','Eletricidade Eletrónica','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addfai = mysqli_query($connect, $addisciplinafai);

                        //PO 11ª
                        $addisciplinaingl = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','60','Práticas Oficinais','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addingl = mysqli_query($connect, $addisciplinaingl);
                        break;

                        //Emp 11ª
                        $addisciplinaingl = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','61','Empreendedorismo','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addingl = mysqli_query($connect, $addisciplinaingl);
                        break;

                    //Atribuir disciplinas para o aluno da 12ª Classe
                    case 7:
                        //Matemática 12ª
                        $addisciplinamt = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','62','Matemática','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addmt = mysqli_query($connect, $addisciplinamt);

                        //Quim 12ª
                        $addisciplinafs = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','63','Química','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addfs = mysqli_query($connect, $addisciplinafs);

                        //fi 11ª
                        $addisciplinaog = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','64','Física','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $adog = mysqli_query($connect, $addisciplinaog);

                        //ing 12ª
                        $addisciplinatlp = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','65','Inglês','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addtlp = mysqli_query($connect, $addisciplinatlp);

                        //PT 12ª
                        $addisciplinatr = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','66','Projeto Tecnológico','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addtr = mysqli_query($connect, $addisciplinatr);

                        //RTM 12ª
                        $addisciplinaef = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','67','Rede de Telefonia Móvel','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addef = mysqli_query($connect, $addisciplinaef);

                        //TT 12ª
                        $addisciplinalp = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','68','Tecnologia Telecom','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addlp = mysqli_query($connect, $addisciplinalp);

                        //SD 12ª
                        $addisciplinaemp = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','69','Sistemas Digitais','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addemp = mysqli_query($connect, $addisciplinaemp);

                        //EE 12ª
                        $addisciplinainglt = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','70','Eletricidade Electrónica','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addinglt = mysqli_query($connect, $addisciplinainglt);

                        //PO 12ª
                        $addisciplinaept = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','71','Práticas Oficinas(Arduino)','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addept = mysqli_query($connect, $addisciplinaept);

                        //OGI 12ª
                        $addisciplinalp = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','72','Organização e Gestão Industrial','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addlp = mysqli_query($connect, $addisciplinalp);

                        //Emp 12ª
                        $addisciplinalp = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','73','Empreendedorismo','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addlp = mysqli_query($connect, $addisciplinalp);

                        break;

                    //Atribuir disciplinas para o aluno da 13ª Classe
                    case 8:

                        //PT 12ª
                        $addisciplinaept = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','74','Projecto Tecnológico','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addept = mysqli_query($connect, $addisciplinaept);

                        //Estágio 12ª
                        $addisciplinaestg = "insert into notas (iduser,iddisciplina,disciplina,idclasse,idcurso,Ip1,Ip2,Ipt,IIp1,IIp2,IIpt,IIIp1,IIIp2,IIIpt,pf) values ('$novoiduser','75','Estágio','$classe','$curso','0','0','0','0','0','0','0','0','0','0')";
                        $addestg = mysqli_query($connect, $addisciplinaestg);
                        break;

                endswitch;
            break;
        endswitch;
    }	   
}

mysqli_close($connect);

header('Location: ./alunos.php');

?>