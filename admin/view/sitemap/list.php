<main>
	<section class="blog">
	<?php
		$xml=new DomDocument("1.0", "UTF-8");
		$xml->formatOutput=true;
					
		$urlset = $xml -> createElement("urlset");
		$urlset->setAttribute("xmlns","http://www.sitemaps.org/schemas/sitemap/0.9");
		$urlset->setAttribute("xmlns:xsi","http://www.w3.org/2001/XMLSchema-instance");
		$urlset->setAttribute("xsi:schemaLocation","http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd");
		$xml->appendChild($urlset);
					
		//Trang chủ
		$url=$xml->createElement("url");
		$urlset->appendChild($url);	
		$loc=$xml->createElement("loc", "https://codethuan.com");
		$url->appendChild($loc);	
		$changefreq=$xml->createElement("changefreq", "weekly");
		$url->appendChild($changefreq);	
		$priority=$xml->createElement("priority", "0.8");
		$url->appendChild($priority);
					
		//Liên hệ
		$url=$xml->createElement("url");
		$urlset->appendChild($url);	
		$loc=$xml->createElement("loc", "https://codethuan.com/lien-he");
		$url->appendChild($loc);	
		$changefreq=$xml->createElement("changefreq", "weekly");
		$url->appendChild($changefreq);	
		$priority=$xml->createElement("priority", "0.8");
		$url->appendChild($priority);

		// Tin
		$dataTin = $query->DanhSach("tin", ["id", "slug"]);
		foreach ($dataTin as $key => $value) 
		{
			$url=$xml->createElement("url");
			$urlset->appendChild($url);	
			$loc=$xml->createElement("loc", "https://codethuan.com/".$value->slug);
			$url->appendChild($loc);	
			$changefreq=$xml->createElement("changefreq", "weekly");
			$url->appendChild($changefreq);	
			$priority=$xml->createElement("priority", "0.8");
			$url->appendChild($priority);
		}

		echo "<xmp>".$xml->saveXML()."</xmp>";
		$xml->save("../sitemap.xml");
	?>
	</section>
</main>