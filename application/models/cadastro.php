<?PHP
class Cadastro extends CI_Model{
    public $nome;
    public $email;
    public $senha;
	public $telefone;
	public $rg;
	public $cep;
	public $logradouro;
	public $numero;
	public $complemento;
	public $bairro;
	public $cidade;
	public $estado;
	public function __construct()
    {}

	function setNovoCadastro(){
		$this->load->database();
		$this->db->set('nome', $this->nome);
		$this->db->set('email', $this->email);
		$this->db->set('senha', $this->senha);
		$this->db->set('telefone', $this->telefone);
		$this->db->set('rg', $this->rg);
		$this->db->set('cep', $this->cep);
		$this->db->set('logradouro', $this->logradouro);
		$this->db->set('numero', $this->numero);
		$this->db->set('complemento', $this->complemento);
		$this->db->set('bairro', $this->bairro);
		$this->db->set('cidade', $this->cidade);
		$this->db->set('estado', $this->estado);
		if ($this->db->insert('clientes')) {
			echo 'Cliente inserido com sucesso!';
		} else {
			echo 'Houve uma falha ao inserir o cliente';
		}
	}

}