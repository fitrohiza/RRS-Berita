<?php class Article extends CI_Controller {
	public function index() {
		$data['articles']=[ [ 'tittle'=>'Foo',
		'content'=>'Ini artikel tentang foo'
		],
		[ 'tittle'=>'Bar',
		'content'=>'Ini artikel tentang Bar'
		]];

		if (count($data['articles']) > 3) {
			$this->load->view('articles/list_article.php', $data);
		}

		else {
			$this->load->view('articles/empty_article.php');
		}
	}

	public function show ($slug=null) {
		$this->load->view('articles/show_article.php');
	}
}

?>
