<?php

function setActive($route){
	return request()->routeIs($route) ? 'active' : '';
}

function options_state(){
	$options = array('FINALIZADO','EN EMISION');
	return $options;
}

function setStatus($status){
	switch ($status) {
		case 'Finalizado':
			$label = 'label-success';
			break;
		case 'En emisión':
			$label = 'label-warning';
			break;
		default:
			$label = 'label-primary';
			break;
	}
	return $label;
}