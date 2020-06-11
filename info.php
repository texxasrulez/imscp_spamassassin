<?php
/**
 * i-MSCP SpamAssassin plugin
 * Copyright (C) 2015-2017 Laurent Declercq <l.declercq@nuxwin.com>
 * Copyright (C) 2013-2016 Sascha Bay <info@space2place.de>
 * Copyright (C) 2013-2016 Rene Schuster <mail@reneschuster.de>
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 */

return array(
    'author'      => array(
		'Gene Hawkins',
        'Laurent Declercq',
        'Rene Schuster',
        'Sascha Bay'
    ),
    'email'       => 'team@i-mscp.net',
    'version'     => '1.0.0',
    'require_api' => '1.4.0',
    'date'        => '2020-06-06',
    'build'       => '2020060600',
    'name'        => 'SpamAssassin',
    'desc'        => 'Provides SpamAssassin spam filter through MILTER with Roundcube 1.4.x Support.',
    'url'         => 'http://wiki.i-mscp.net/doku.php?id=plugins:spamassassin'
);
