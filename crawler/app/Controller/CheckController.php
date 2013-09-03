<?php
App::uses('simple_html_dom', 'Lib');
App::uses('PHPExcel', 'Lib');
class CheckController extends AppController {
	public $name = 'check';
	public $uses = array('Post', 'Postmeta', 'TermRelationship');
	public $components = array('Email');
	
	public function index(){
		set_time_limit(0);
		$result = array();
		
		$args = array(
	 		array(
				'name' => 'http://www.thongtincongnghe.com',
				'page-link' => array(
					'http://www.thongtincongnghe.com/',
				),
				'link' => '.node-title a',
				'title' => 'h2.title',
				'content' => '.node-content',
				'category' => '31'
			),
			
	  		array(
				'name' => 'http://sohoa.vnexpress.net',
				'page-link' => array(
					'http://sohoa.vnexpress.net/tin-tuc/san-pham/page/5.html',
					'http://sohoa.vnexpress.net/tin-tuc/san-pham/page/4.html',
					'http://sohoa.vnexpress.net/tin-tuc/san-pham/page/3.html',
					'http://sohoa.vnexpress.net/tin-tuc/san-pham/page/2.html',
					'http://sohoa.vnexpress.net/tin-tuc/san-pham'
				),
				'link' => '.h3Homen a',
				'title' => 'h1.dt-ptit',
				'content' => '#article_content',
				'category' => '31'
			),
			array(
				'name' => 'http://genk.vn',
				'page-link' => array(
					'http://genk.vn/mobile-app/page-4.chn',
					'http://genk.vn/may-tinh-bang/page-4.chn',
					'http://genk.vn/dien-thoai/page-4.chn',
					'http://genk.vn/mobile-app/page-3.chn',
					'http://genk.vn/may-tinh-bang/page-3.chn',
					'http://genk.vn/dien-thoai/page-3.chn',
					'http://genk.vn/mobile-app/page-2.chn',
					'http://genk.vn/may-tinh-bang/page-2.chn',
					'http://genk.vn/dien-thoai/page-2.chn',
					'http://genk.vn/mobile-app.chn',
					'http://genk.vn/may-tinh-bang.chn',
					'http://genk.vn/dien-thoai.chn',
					
				), 
				'link' => '.list-news h2 a',
				'title' => '.news-showtitle h1',
				'content' => '.content',
				'category' => '31'
			),
			array(
				'name' => 'http://www.onboom.com/',
				'page-link' => array(
					'http://www.onboom.com/kien-thuc-ve-web.html?start=60',
					'http://www.onboom.com/kien-thuc-ve-web.html?start=30',
					'http://www.onboom.com/kien-thuc-ve-web.html'
				), 
				'link' => '.contentheading a',
				'title' => '.contentheading a',
				'content' => '.article-content > div',
				'category' => '25'
			),
			/* 
			 
			array(
				'name' => 'http://thuvien.mobi',
				'page-link' => array(
					'http://thuvien.mobi/category/anh-nong/page/3',
					'http://thuvien.mobi/category/anh-nong/page/2',
					'http://thuvien.mobi/category/anh-nong',				
				), 
				'link' => 'h2.entry-title a',
				'title' => ' h1.entry-title',
				'content' => '.entry .entry-content',
				'category' => '10'
			),
			array(
				'name' => 'http://www.vietgiaitri.com/',
				'page-link' => array(
					'http://www.vietgiaitri.com/category/super-star/sao-viet/',
					'http://www.vietgiaitri.com/category/super-star/sao-chau-a/',
				), 
				'link' => '.post-content-archive h3 a',
				'title' => '.post-content h1',
				'content' => '.entry div[itemprop="articleBody"]',
				'category' => '4'
			),
			array(
				'name' => 'http://www.vietgiaitri.com/',
				'page-link' => array(
					'http://www.vietgiaitri.com/category/dep-xinh/nguoi-dep/page/5/',
					'http://www.vietgiaitri.com/category/dep-xinh/nguoi-dep/page/4/',
					'http://www.vietgiaitri.com/category/dep-xinh/nguoi-dep/page/3/',
					'http://www.vietgiaitri.com/category/dep-xinh/nguoi-dep/page/2/',
					'http://www.vietgiaitri.com/category/dep-xinh/nguoi-dep/',
				), 
				'link' => '.post-content-archive h3 a',
				'title' => '.post-content h1',
				'content' => '.entry div[itemprop="articleBody"]',
				'category' => '9'
			),
			array(
				'name' => 'http://www.tapchidanong.org',
				'page-link' => array(
					'http://www.tapchidanong.org/brands/Anh-girl-xinh.html?page=3&sort=newest',
					'http://www.tapchidanong.org/brands/Anh-girl-xinh.html?page=2&sort=newest',
					'http://www.tapchidanong.org/brands/Anh-girl-xinh.html',				
				), 
				'link' => '.ProductDetails a',
				'title' => '.Description h2',
				'content' => '#ProductDescription',
				'category' => '10'
			),
			array(
				'name' => 'http://hn.eva.vn',
				'page-link' => array(
					'http://hn.eva.vn/bi-mat-eva-c6.html',
					'http://hn.eva.vn/bi-mat-adam-c5.html',
					'http://hn.eva.vn/nghe-thuat-yeu-c54.html',			
				), 
				'link' => '.div_title_news a',
				'title' => 'h1.title_sapo_news span',
				'content' => '#baiviet-container',
				'category' => '16'
			),
			array(
				'name' => 'http://www.doctruyen360.com',
				'page-link' => array(
					'http://www.doctruyen360.com/tag/truyen-tinh-tuoi-teen/page/10/',
					'http://www.doctruyen360.com/tag/truyen-tinh-tuoi-teen/page/9/',
					'http://www.doctruyen360.com/tag/truyen-tinh-tuoi-teen/page/8/',
					'http://www.doctruyen360.com/tag/truyen-tinh-tuoi-teen/page/7/',
					'http://www.doctruyen360.com/tag/truyen-tinh-tuoi-teen/page/6/',
					'http://www.doctruyen360.com/tag/truyen-tinh-tuoi-teen/page/5/',
					'http://www.doctruyen360.com/tag/truyen-tinh-tuoi-teen/page/4/',
					'http://www.doctruyen360.com/tag/truyen-tinh-tuoi-teen/page/3/',
					'http://www.doctruyen360.com/tag/truyen-tinh-tuoi-teen/page/2/',
					'http://www.doctruyen360.com/tag/truyen-tinh-tuoi-teen',			
				), 
				'link' => 'h2.title a',
				'title' => '.metainfo h1 a',
				'content' => 'div.dtct1072',
				'category' => '17'
			),
			
			array(
				'name' => 'http://www.doctruyen360.com',
				'page-link' => array(
					'http://www.doctruyen360.com/truyen-cuoi-cuc-hay/page/3/',
					'http://www.doctruyen360.com/truyen-cuoi-cuc-hay/page/2/',
					'http://www.doctruyen360.com/truyen-cuoi-cuc-hay/',			
				), 
				'link' => 'h2.title a',
				'title' => '.metainfo h1 a',
				'content' => 'div.27976',
				'category' => '18'
			),
			array(
				'name' => 'http://truyenhay.vn',
				'page-link' => array(
					'http://truyenhay.vn/category/truyen-ngan/cau-chuyen-cuoc-song/page/10',
					'http://truyenhay.vn/category/truyen-ngan/cau-chuyen-cuoc-song/page/9',
					'http://truyenhay.vn/category/truyen-ngan/cau-chuyen-cuoc-song/page/8',
					'http://truyenhay.vn/category/truyen-ngan/cau-chuyen-cuoc-song/page/7',
					'http://truyenhay.vn/category/truyen-ngan/cau-chuyen-cuoc-song/page/6',
					'http://truyenhay.vn/category/truyen-ngan/cau-chuyen-cuoc-song/page/5',
					'http://truyenhay.vn/category/truyen-ngan/cau-chuyen-cuoc-song/page/4',
					'http://truyenhay.vn/category/truyen-ngan/cau-chuyen-cuoc-song/page/3',
					'http://truyenhay.vn/category/truyen-ngan/cau-chuyen-cuoc-song/page/2',
					'http://truyenhay.vn/category/truyen-ngan/cau-chuyen-cuoc-song',		
				), 
				'link' => '.hentry h2 a',
				'title' => '.hentry  h2',
				'content' => '.entrypost',
				'category' => '19'
			),
			array(
				'name' => 'http://vnexpress.net',
				'page-link' => array(
					'http://vnexpress.net/tin-tuc/tam-su/page/3.html',
					'http://vnexpress.net/tin-tuc/tam-su/page/2.html',
					'http://vnexpress.net/tin-tuc/tam-su',			
				), 
				'link' => 'h2 a.link-title14',
				'title' => 'h1.Title',
				'content' => '.fck_detail',
				'category' => '19'
			),
			*/
		);
		
		$stringReplace = array(
			'doctruyen360.com' => 'gamechonloc.mobi',
			'doctruyen360@gmail.com' => 'gamechonloc.mobi@gmail.com'
		);
		$removeImages = array(
			'http://www.doctruyen360.com',
			'http://www.onboom.com/'
		);
		
		foreach($args as $value){
			foreach ($value['page-link'] as $pageLink){
				
				$header = $this->parse($pageLink);
				if($header){
					$objHtml = new simple_html_dom();
					$objHtml->clear();
					$objHtml->load($header);
					$links = $objHtml->find($value['link']);
					$links = array_reverse($links);
					CakeLog::write('debug', count($links) . ' links were found of ' . $pageLink);
					echo count($links) . ' links were found of ' . $pageLink;
					foreach($links as $link){
						
						if((strpos($link->href, $value['name']) === 0)){
							$artice = $this->parse($link->href);	
						} else {
							$artice = $this->parse($value['name'] . $link->href);
						}

						if($artice){
							$objHtml->clear();
							$objHtml->load($artice);
							$title = $objHtml->find($value['title'], 0);
							$content = $objHtml->find($value['content'], 0);
														
							//remove link
							$contentText = preg_replace("#(<a.*?>)(.*?)(<\/a>)#", "$2", $content->innertext);
							//remove scrip
							$contentText = preg_replace('#<script(.*?)>(.*?)</script>#is', '', $contentText);
							//remove unwanted words
							foreach($stringReplace as $strSearch => $strReplace){
								$contentText =  str_replace($strSearch, $strReplace, $contentText);
							}
							//remove photos
							if(in_array($value['name'], $removeImages)){
								$contentText = preg_replace('/<img[^>]+\>/', '', $contentText);
							}
							
							$metaTitle = $objHtml->find('meta[name="title"]', 0);
							$metaDesc = $objHtml->find('meta[name="description"]', 0);
							$metaKeywords = $objHtml->find('meta[name="keywords"]', 0);
							
							$data = array(
								'title' => $title->innertext,
								'content' => $contentText . '<br/> Nguồn ' . $value['name'] . '',
								'category' => $value['category'],
								'meta_title' => is_object($metaTitle) ? $metaTitle->innertext : $title->innertext,
								'meta_description' => is_object($metaDesc) ? $metaDesc->content : '',
								'meta_keywords' => is_object($metaKeywords) ? $metaKeywords->content : ''
								
							);
							$this->insertPost($data);							
						}

					}					
				} else {
					CakeLog::write('debug', ' failed request to ' . $pageLink);
				}
				

			}
 
		}
		die;
	}
	
	/**
	 * insert post to DB
	 * @author duythanhdao@live.com
	 */
	 
	public function insertPost($data){
		$exist = $this->Post->find('count', array(
			'conditions' => array('post_title' => $data['title'])
		));

		if($exist)
			return 0;
		
		$postData[0] = array(
			'post_author' => 1,
			'post_date' => date('Y-m-d H:i:s', time()),
			'post_date_gmt' => date('Y-m-d H:i:s', time()),
			'post_content' => $data['content'],
			'post_title' => $data['title'],
			'post_status' => 'publish',
			'comment_status' => 'close',
			'ping_status' => 'open',
			'post_name' => $this->convertText($data['title']),
			'post_modified' => date('Y-m-d H:i:s', time()),
			'post_modified_gmt' => date('Y-m-d H:i:s', time()),
			'post_parent' => 0,
			'menu_order' => 0,
			'post_type' => 'post',
			'comment_count' => 0,
		);
		$this->Post->saveAll($postData);
		$postId = $this->Post->getLastInsertID();
		
		$this->TermRelationship->saveAll(array(
			'object_id' => $postId,
			'term_taxonomy_id' => $data['category'],
			'term_order' => '0'
		));
		
		$this->Postmeta->saveAll(array(
			array(
				'post_id' => $postId,
				'meta_key' => '_su_title',
				'meta_value' => $data['meta_title'] . '| ecomwebpro.com'
			),
			array(
				'post_id' => $postId,
				'meta_key' => '_su_description',
				'meta_value' => $data['meta_description'] . ', ecomwebpro.com'
			),
			array(
				'post_id' => $postId,
				'meta_key' => '_su_keywords',
				'meta_value' => $data['meta_keywords'] . ', xây dựng web'
			)
		));
	}
	
	public function getDiv($html){
		$objHtml = new simple_html_dom();
		$objHtml->clear();
		$objHtml->load($html);
		$div = $objHtml->find('div');

		$len = 0;
		$content = '';

		foreach ($div as $item){
			debug($item->innertext);
			$objHtml->clear();
			$objHtml->load($item->innertext);
			
			if(!count($objHtml->find('div'))){
				$strlen = strlen(strip_tags($item->innertext));
				if($strlen > $len){
					$len = $strlen;
					$content =  $item->innertext;
				}
			}
		}
		return $content;
	}

	/**
	 * get html content use CURL
	 */
	private function parse($url, $userAgent = 0){

	    $agents = array(
			0 => 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/21',
			1 => 'Mozilla/5.0 (iPhone; U; CPU iPhone OS 3_0 like Mac OS X; en-us) AppleWebKit/528.18 (KHTML, like Gecko) Version/4.0 Mobile/7A341 Safari/528.16'
		);
	    try {
	        $ch = curl_init();
	        curl_setopt($ch, CURLOPT_HEADER, 0);
	        curl_setopt($ch, CURLOPT_VERBOSE, FALSE);
	        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	        curl_setopt($ch, CURLOPT_USERAGENT, $agents[$userAgent]);
	        curl_setopt($ch, CURLOPT_URL, $url);
	        @$curlResp = curl_exec($ch);
	        curl_close($ch);
			if ($curlResp == false){
				return 0;
			}
			else {
				return $curlResp;
			}
		}
		catch( Exception $e){}
	}
	
	
	public function convertText($str){
		$str = html_entity_decode($str);
	 	$str = mb_convert_case($str,MB_CASE_TITLE,'utf-8');
	 	$str = trim(strtolower($str));
		$str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
		$str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
		$str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
		$str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
		$str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
		$str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
		$str = preg_replace("/(đ|Đ)/", 'd', $str);
		$str = preg_replace('/["]/', '-', $str);
		$str = preg_replace('/\W+/', '-', $str);
		$str = trim($str, '-');
		return $str;		
	}

	private function getHtmlContent($name, $keyword, $userId, $timeNumber){
		$resultUrl = array(
			'adword' => array(),
			'normal' => array()
		);
		
		$engine = array(
			'google' => array(
				'url' => 'https://www.google.co.jp/search?q=' . $keyword . '&ie=utf-8&oe=utf-8',
				'ads-container' => '.ads-container .vsc.vsta',
				'ads-link' => 'h3 a',
				'link-container' => '.g',
				'link' => 'h3 a',
				'ads-title' => 'h3 a',
				'ads-desc' => '.ads-creative',
				'title' => 'h3 a+a',
				'desc' => 'span.st'
			)
		);
		$objHtml = new simple_html_dom();
		$userAgent = array(
			'google' => 0,
			'yahoo' => 0,
			'google-mobile' => 1,
			'yahoo-mobile' => 1
		);
		$header = $this->parse($engine[$name]['url'], $userAgent[$name]);

		if (!$header)
			return 0;
		$objHtml->clear();
		$objHtml->load($header);
		
		$adsContainer = $objHtml->find($engine[$name]['ads-container']);
		$keyword = urldecode($keyword);
		foreach($adsContainer as $ad){
//			$stringUrl = $ad->find($engine[$name]['ads-link'], 0)->href;
			$stringUrl = 'https://www.google.co.jp' . $ad->find($engine[$name]['ads-link'], 0)->href;
			if(($name == 'google')) {
				$title = strip_tags($ad->find($engine[$name]['ads-title'], 1)->innertext());
			} else {
				$title = strip_tags($ad->find($engine[$name]['ads-title'], 0)->innertext());
			}
			$resultUrl['adword'][] = array(			
				'url' 	=> html_entity_decode($stringUrl),
				'title' => $title,
				'desc' 	=> strip_tags($ad->find($engine[$name]['ads-desc'], 0)->innertext()),
//				'is_adword' => 1,
//				'keyword' => $keyword,
//				'user_id' => $userId,
//				'engine_name' => $name
			);

		}

	}
}