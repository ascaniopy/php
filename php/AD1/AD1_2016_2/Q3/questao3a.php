<?php
	function getMediaTurma($arrNotas) {
		$somaNotaAlunos = 0;
		$qtdeAlunos = 0;
		
		foreach ($arrNotas as $aluno => $nota) {
			$somaNotaAlunos += $nota;
			$qtdeAlunos++;
		}
		
		if($qtdeAlunos > 0) {
			$mediaNotaAlunos = $somaNotaAlunos / $qtdeAlunos;
			return $mediaNotaAlunos;
		}
		else return "Media da turma: Sem aluno(a)s na turma\n";
	}
	
	$notaFinalDisciplina = array(
		"Daniel"=>6,
		"Pedro"=>4,
		"Cristina"=>8);
	
	echo nl2br("Media da turma: ".getMediaTurma($notaFinalDisciplina)."\n");
?>