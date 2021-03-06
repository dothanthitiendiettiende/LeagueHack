<?php
/**
 * @brief		Moderator Control Panel Member Management Extension: ChatBanned
 * @author		<a href='http://www.invisionpower.com'>Invision Power Services, Inc.</a>
 * @copyright	(c) 2001 - 2016 Invision Power Services, Inc.
 * @license		http://www.invisionpower.com/legal/standards/
 * @package		IPS Community Suite
 * @subpackage	Chat
 * @since		15 Mar 2015
 * @version		SVN_VERSION_NUMBER
 */

namespace IPS\chat\extensions\core\ModCpMemberManagement;

/* To prevent PHP errors (extending class does not exist) revealing path */
if ( !defined( '\IPS\SUITE_UNIQUE_KEY' ) )
{
	header( ( isset( $_SERVER['SERVER_PROTOCOL'] ) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.0' ) . ' 403 Forbidden' );
	exit;
}

/**
 * @brief	Moderator Control Panel Member Management Extension: ChatBanned
 */
class _ChatBanned
{
	/**
	 * Returns the tab key for the navigation bar
	 *
	 * @return	string|null
	 */
	public function getTab()
	{
        return 'chatBanned';
	}
	
	/**
	 * Get content to display
	 *
	 * @return	string
	 */
    public function manage()
    {
        /* Create the table */
        $table = new \IPS\Helpers\Table\Db( 'core_members', \IPS\Http\Url::internal( 'app=core&module=modcp&tab=members&area=chat_banned' ), 'chat_banned=1' );
        $table->rowsTemplate = array( \IPS\Theme::i()->getTemplate( 'modcp', 'core', 'front' ), 'memberManagementRow' );

        $table->langPrefix = 'members_';

        /* Columns we need */
        $table->include = array( 'member_id', 'name', 'email', 'joined', 'member_group_id', 'photo' );
        $table->mainColumn = 'name';

        /* Custom parsers */
        $table->parsers = array(
            'joined'			=> function( $val, $row )
            {
                return \IPS\DateTime::ts( $val )->localeDate();
            },
            'member_group_id'	=> function( $val, $row )
            {
                return \IPS\Member\Group::load( $val )->formattedName;
            },
            'photo' => function( $val, $row )
            {
                return \IPS\Theme::i()->getTemplate( 'global', 'core' )->userPhoto( \IPS\Member::constructFromData( $row ), 'mini' );
            },
        );

        /* Individual member actions */
        $table->rowButtons = function( $row )
        {
            $member = \IPS\Member::constructFromData( $row );

            $return = array();

            $return['edit'] = array(
                'icon'		=> 'pencil',
                'title'		=> 'edit',
                'link'		=> \IPS\Http\Url::internal( 'app=core&module=members&controller=profile&do=edit&id=' . $member->member_id, 'front', 'edit_profile', $member->members_seo_name )
            );

            $return['warn'] = array(
                'icon'		=> '',
                'title'		=> 'modcp_view_warnings',
                'link'		=> \IPS\Http\Url::internal( 'app=core&module=system&controller=warnings&id=' . $member->member_id, 'front', 'warn_list', $member->members_seo_name )
            );

            $return['contact'] = array(
                'icon'		=> 'envelope',
                'title'		=> 'message',
                'link'		=> \IPS\Http\Url::internal( 'app=core&module=messaging&controller=messenger&do=compose&to=' . $member->member_id, 'front', 'messenger_compose', $member->members_seo_name )
            );

            return $return;
        };

        /* Default sort options */
        $table->sortBy = $table->sortBy ?: 'joined';
        $table->sortDirection = $table->sortDirection ?: 'desc';

        return (string) $table;
    }
}