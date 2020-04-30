<?php 
/* PARTE 1
$nome_sessoes = array();
$nome_sessoes[0] = "Install Party";
$nome_sessoes[1] = "KILL the VIRUS";
$nome_sessoes[2] = "N-Dimensional VIRUS";
$nome_sessoes[3] = "Connect To ME";
$nome_sessoes[4] = "Security Party";

$data_sessoes = array();
$data_sessoes[0] = "21-02-2017";
$data_sessoes[1] = "13-03-2017";
$data_sessoes[2] = "01-04-2017";
$data_sessoes[3] = "21-04-2017";
$data_sessoes[4] = "05-05-2017";
*/

/*PARTE 3
$sessoes = array(
            array("Install Party","21-02-2017","Install_Party.png", "A AVILA Crew apresenta-te a primeira AVILA Session – a Install Party!
            Dia 21 de Fevereiro, junta-te a nós pelas 21h. O local é secreto… (não queiras saber tudo já!). Fugindo do ambiente de aula tradicional, junta-te a nós - pessoas que pensam como tu, que já tiveram as mesmas dificuldades e que, melhor que     ninguém, percebem pelo que estás a passar. Depois disto, só é vitima de Lab4 quem quer! ;)"),
            
            array("KILL the VIRUS","13-03-2017","KILL_VIRUS.png", "O Vírus SQL propagou-se pelo CCCI e preparamo-nos para reunir esforços em busca do antídoto. Ao que tudo indica, ele estará algures pelo CCCI já na próxima segunda-feira!
            E tu aí que estás em Lab4, a AVILA Crew deixa-te um conselho: o melhor é vires à AVILA Session - KILL THE VIRUS, não vás tu começar a sentir os efeitos secundários do Vírus na véspera do teste..."),
            
            array("N-Dimensional VIRUS","01-04-2017","N_Dimensinal_VIRUS.png","Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit."),
            
            array("Connect To ME","21-04-2017","Connect_ME.png","Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Curabitur blandit tempus porttitor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras mattis consectetur purus sit amet fermentum."),
            
            array("Security Party","05-05-2017","Security_Party.png", "Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Vestibulum id ligula porta felis euismod semper. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Donec id elit non mi porta gravida at eget metus."),

);
*/

//PARTE 4 + PARTE 5

$sessoes = array(

    "S0" => array ("Name" => "Install Party", "Date" => "21-02-2017" ,"Img" => "Install_Party.png", "Dsc" => "A AVILA Crew apresenta-te a primeira AVILA Session – a Install Party!
            Dia 21 de Fevereiro, junta-te a nós pelas 21h. O local é secreto… (não queiras saber tudo já!). Fugindo do ambiente de aula tradicional, junta-te a nós - pessoas que pensam como tu, que já tiveram as mesmas dificuldades e que, melhor que     ninguém, percebem pelo que estás a passar. Depois disto, só é vitima de Lab4 quem quer! ;)" , 
        "Participants" => array("Donette Mannella", "Mamie Manning", "Divina Venne", "Kiara Saleh " , "Shanice Covey" ,"Millie Kantz","Ronald Grunden ","Gloria Jessee","Georgene Holsinger  ","Ursula Moffitt  " , "Bryanna Latimer","Jeff Reyes  ","Shonda Chipps  ","Twanda Onstad","Amado Booth ","Sammie Volk ", "Tonia Draper ","Eula Brigance  ","Marilynn Mulford ","Luana Killen")),

    "S1" => array ("Name" => "KILL the VIRUS", "Date" => "13-03-2017" ,"Img" => "KILL_VIRUS.png", "Dsc" => "O Vírus SQL propagou-se pelo CCCI e preparamo-nos para reunir esforços em busca do antídoto. Ao que tudo indica, ele estará algures pelo CCCI já na próxima segunda-feira!E tu aí que estás em Lab4, a AVILA Crew deixa-te um conselho: o melhor é vires à AVILA Session - KILL THE VIRUS, não vás tu começar a sentir os efeitos secundários do Vírus na véspera do teste..." , 
        "Participants" => array("Donette Mannella", "Mamie Manning", "Divina Venne", "Kiara Saleh " , "Shanice Covey" ,"Millie Kantz","Ronald Grunden ","Gloria Jessee","Georgene Holsinger  ","Ursula Moffitt  " , "Bryanna Latimer","Jeff Reyes  ","Shonda Chipps  ","Twanda Onstad","Amado Booth ","Sammie Volk ", "Tonia Draper ","Eula Brigance  ","Marilynn Mulford ","Luana Killen")),

    "S2" => array ("Name" => "N-Dimensional VIRUS", "Date" => "01-04-2017" ,"Img" => "N_Dimensinal_VIRUS.png", "Dsc" => "Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit." , 
        "Participants" => array("Donette Mannella", "Mamie Manning", "Divina Venne", "Kiara Saleh " , "Shanice Covey" ,"Millie Kantz","Ronald Grunden ","Gloria Jessee","Georgene Holsinger  ","Ursula Moffitt  " , "Bryanna Latimer","Jeff Reyes  ","Shonda Chipps  ","Twanda Onstad","Amado Booth ","Sammie Volk ", "Tonia Draper ","Eula Brigance  ","Marilynn Mulford ","Luana Killen")),

    "S3" => array ("Name" => "Connect To ME", "Date" => "21-04-2017" ,"Img" => "Connect_ME.png", "Dsc" => "Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Curabitur blandit tempus porttitor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras mattis consectetur purus sit amet fermentum." , 
        "Participants" => array("Donette Mannella", "Mamie Manning", "Divina Venne", "Kiara Saleh " , "Shanice Covey" ,"Millie Kantz","Ronald Grunden ","Gloria Jessee","Georgene Holsinger  ","Ursula Moffitt  " , "Bryanna Latimer","Jeff Reyes  ","Shonda Chipps  ","Twanda Onstad","Amado Booth ","Sammie Volk ", "Tonia Draper ","Eula Brigance  ","Marilynn Mulford ","Luana Killen")),

    "S4" => array ("Name" => "Security Party", "Date" => "05-05-2017" ,"Img" => "Security_Party.png", "Dsc" => "Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Vestibulum id ligula porta felis euismod semper. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Donec id elit non mi porta gravida at eget metus." , 
        "Participants" => array("Donette Mannella", "Mamie Manning", "Divina Venne", "Kiara Saleh " , "Shanice Covey" ,"Millie Kantz","Ronald Grunden ","Gloria Jessee","Georgene Holsinger  ","Ursula Moffitt  " , "Bryanna Latimer","Jeff Reyes  ","Shonda Chipps  ","Twanda Onstad","Amado Booth ","Sammie Volk ", "Tonia Draper ","Eula Brigance  ","Marilynn Mulford ","Luana Killen")),
        
);