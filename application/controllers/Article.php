<?php class Article extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('article_model');
	}

	public function index() {
		$data['articles'] = $this->article_model->get_published();

		if (count($data['articles']) > 0) {
			//article ada
			$this->load->view('articles/list_article.php', $data);
		}

		else {
			//empty article
			$this->load->view('articles/empty_article.php');
		}
	}

	public function show ($slug=null) {
		//empty slug
		if (!$slug){
			show_404();
		}

		//ambil article dengan slug
		$data['article'] = $this->article_model->find_by_slug($slug);

		//article not found in database
		if (!$data['article']){
			show_404();
		}

		//show article
		$this->load->view('articles/show_article.php', $data);
	}
}

?>
