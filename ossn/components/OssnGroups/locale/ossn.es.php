<?php
/**
 * Open Source Social Network
 *
 * Translated by Zaturnay - https://zaturnay.com.ve
 *
 * @package   Open Source Social Network
 * @author    Open Social Website Core Team <info@openteknik.com>
 * @copyright (C) OpenTeknik LLC
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
$es = array(
    'groups' => 'Círculos',
    'add:group' => 'Agregar Círculo',
    'requests' => 'Solicitudes',

    'members' => 'Miembros',
    'member:add:error' => '¡Algo salió mal! Por favor, inténtelo de nuevo más tarde.',
    'member:added' => '¡Solicitud de afiliación aprobada!',

    'member:request:deleted' => '¡Se rechazó la solicitud de afiliación!',
    'member:request:delete:fail' => '¡No se puede rechazar la solicitud de afiliación! Por favor, inténtelo de nuevo más tarde.',
    'membership:cancel:succes' => '¡Solicitud de afiliación cancelada!',
    'membership:cancel:fail' => '¡No se puede cancelar la solicitud de afiliación! Por favor, inténtelo de nuevo más tarde.',

    'group:added' => '¡Se ha creado correctamente el círculo!',
    'group:add:fail' => '¡No se puede crear el círculo! Por favor, inténtelo de nuevo más tarde.',

    'memebership:sent' => '¡Solicitud enviada correctamente!',
    'memebership:sent:fail' => '¡No se puede enviar la solicitud! Por favor, inténtelo de nuevo más tarde.',

    'group:updated' => '¡Círculo ha sido actualizado!',
    'group:update:fail' => '¡No se puede actualizar el círculo! Por favor, inténtelo de nuevo más tarde.',

    'group:name' => 'Nombre del Círculo',
    'group:desc' => 'Descripción del Círculo',
    'privacy:group:public' => 'Todos pueden ver este círculo y sus publicaciones. Solo los miembros pueden publicar en este círculo.',
    'privacy:group:close' => 'Todo el mundo puede ver este círculo. Sólo los miembros pueden publicar y ver publicaciones.',

    'group:memb:remove' => 'Eliminar',
    'leave:group' => 'Salir del Círculo',
    'join:group' => 'Unirse al Círculo',
    'total:members' => 'Total Miembros',
    'group:members' => "Miembros (%s)",
    'view:all' => 'Ver todo',
    'member:requests' => 'SOLICITUDES (%s)',
    'about:group' => 'Acerca del Círculo',
    'cancel:membership' => 'Cancelar afiliación',

    'no:requests' => 'No hay Solicitudes',
    'approve' => 'Aprobar',
    'decline' => 'Negar',
    'search:groups' => 'Buscar Círculos',

    'close:group:notice' => 'Únete a este círculo para ver las publicaciones, las fotos y los comentarios.',
    'closed:group' => 'Círculo cerrado',
    'group:admin' => 'Administración',
	
	'title:access:private:group' => 'Mensaje del círculo',

	// #186 group join request message var1 = user, var2 = name of group
	'ossn:notifications:group:joinrequest' => '%s ha solicitado unirse a %s',
	'ossn:group:by' => 'Por:',
	
	'group:deleted' => 'Contenido del círculo y círculo eliminado',
	'group:delete:fail' => 'No se pudo eliminar el círculo',	

	'group:delete:cover' => 'Borrar Portada',	
	'group:delete:cover:error' => 'Se ha producido un error al eliminar la imagen de portada',
	'group:delete:cover:success' => 'La imagen de portada se ha eliminado correctamente',
	
	//need translation
    'group:memb:make:owner' => 'Make group owner',
    'group:memb:make:owner:confirm' => 'Attention! This action will make >> %s << the new owner of the group and you will lose all of your group admin privileges. Are you sure to proceed?',
    'group:memb:make:owner:admin:confirm' => 'Attention! This action will make >> %s << the new owner of the group and the former owner will lose all of his group admin privileges. Are you sure to proceed?',	
);
ossn_register_languages('es', $es); 