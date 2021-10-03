<?php
	$a = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem recusandae perspiciatis totam sint magni velit quam, dolorem consectetur illum officiis exercitationem adipisci deleniti, corrupti eum magnam quo odit vel ad, doloribus ut pariatur. Fuga perspiciatis incidunt ut a! Vel voluptas sed mollitia deserunt in eius magni nostrum illum corporis doloribus quo cumque ex architecto molestias, perferendis vitae. Dignissimos, dolorum eum? Asperiores hic quae accusantium corporis, saepe possimus delectus cumque? Distinctio aspernatur expedita nisi aperiam perferendis facere suscipit odio rerum explicabo accusamus ipsum sint dicta quia repellat nostrum alias veritatis quod deserunt autem, amet aliquid quasi? Obcaecati, veritatis. Sunt ab odit ad explicabo labore fuga perferendis quaerat at fugiat! Explicabo officia id iste quidem nam dolores consequuntur, eveniet nesciunt. Ex dolores, rem iste ab fuga quam veritatis sapiente modi praesentium esse accusantium, sequi ad dolorem fugiat dignissimos, nemo non harum voluptate explicabo quisquam? Magni obcaecati nostrum optio architecto asperiores possimus laboriosam quod eius dicta, consequuntur sint sit a! Officia, maiores blanditiis vero animi repudiandae recusandae qui sed itaque perferendis necessitatibus fugiat commodi explicabo repellendus quidem corporis totam dolorem sapiente vel deserunt omnis nam modi quisquam libero! Sit suscipit placeat eligendi! Id consequatur consectetur assumenda repudiandae impedit nam quae fugit fuga soluta.";
	
	$b = mb_substr($a, 0, 180);
	$link = "google.com";
	$pattern = '/\w+[\s.,:;?!]\w+$/uU';
	// если последний символ - знак препинания - удаляем
	$b = preg_replace("/[\s.,:;?!]$/", "" ,$b);
	$b = preg_replace($pattern, "<a href='$link'>$0...</a>" ,$b);

	print $b;
?>