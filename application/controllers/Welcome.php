<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class padrinho {
	public $name;
	public $description;
	public $team;
	public $photo;

	public function __construct($name){
		$this->name = $name;
	}
}

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$barbra = new padrinho("Barbra Dietzsch");
		$barbra->description = "Arquiteta incrível, cheia de bom gosto e dona das melhores tiradas da língua culta portuguesa de todo o mundo, ela é o motivo de muitas das nossas risadas, amiga super companheira, sem a qual não vivemos sem!";
		$barbra->team = "Cami's team";
		$barbra->photo = "http://placehold.it/200x200";

		$aline = new padrinho("Aline Herrmann");
		$aline->description = "Minha irmã que a vida trouxe. Aquela amiga que você conta com tudo, independente de tudo. Ela é parte da família que eu escolhi pra mim. Abraçou e participou do nascimento dessa união passinho por passinho. Cada dia queremos mais ela e Rafa pertinho da nossa vida.";
		$aline->team = "Baeta's team";
		$aline->photo = "http://placehold.it/200x200";

		$germana = new padrinho("Germana Acioly");
		$germana->description = "";
		$germana->team = "Cami's team";
		$germana->photo = "http://placehold.it/200x200";

		$debora = new padrinho("Débora Magalhães");
		$debora->description = "É com ela que sei que posso ser eu e independente do que aconteça ela vai ser sempre ela. Transparência, cumplicidade e carinho. Mesmo a Cami querendo toma-la de mim (hahahaha), ela vai ser Baeta's team. ";
		$debora->team = "Baeta's team";
		$debora->photo = "http://placehold.it/200x200";

		$paola = new padrinho("Paola Baião");
		$paola->description = "";
		$paola->team = "Cami's team";
		$paola->photo = "http://placehold.it/200x200";

		$luiz = new padrinho("Luiz Felipe");
		$luiz->description = "Ele tem sempre uma palavra para ponderar algum ponto e está sempre disposto a fazer de tudo pelos seus amigos. Em pouco tempo mostrou ser um grande amigo nosso. Contar com ele na nossa vida é garantia de equilíbrio e companhia sempre.";
		$luiz->team = "Baeta's team";
		$luiz->photo = "http://placehold.it/200x200";

		$patrick = new padrinho("Patrick Ziegler");
		$patrick->description = "";
		$patrick->team = "Cami's team";
		$patrick->photo = "http://placehold.it/200x200";

		$rafael = new padrinho("Rafael Coelho");
		$rafael->description = "Nosso capitão. O homem do mar, que virou parte da minha família. Rafa é divertido, inteligente e resmungão. Mas tem o coração do tamanho do mundo e o caráter maior. É um prazer tê-lo como parte da família que escolhi pra mim.";
		$rafael->team = "Baeta's team";
		$rafael->photo = "http://placehold.it/200x200";

		$camisay = "we were dating, and I felt and still do feel, the happiest girl in the world. Jacob makes me feel so special and loved. You are the love of my life, my best friend. I don’t think anybody could be happier than I am today.";
		$baetasay = "we were dating, and I felt and still do feel, the happiest girl in the world. Jacob makes me feel so special and loved. You are the love of my life, my best friend. I don’t think anybody could be happier than I am today.";

		$data = array(
			"title"=>'Cami e Baeta',
			"camisay"=>$camisay,
			"baetasay"=>$baetasay,
			"barbra"=> $barbra,
			"aline"=> $aline,
			"germana"=> $germana,
			"debora"=>$debora,
			"paola"=>$paola,
			"luiz"=>$luiz,
			"patrick"=>$patrick,
			"rafael"=>$rafael
			);
		$this->load->view('home', $data);
	}
}
