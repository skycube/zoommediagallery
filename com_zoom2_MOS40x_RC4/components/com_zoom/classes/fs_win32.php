<?php
/*
 * Gallery - a web based photo album viewer and editor
 * Copyright (C) 2000-2003 Bharat Mediratta
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or (at
 * your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */
function fs_copy($source, $dest) {
	$umask = umask(0133);
	$results = copy(
		fs_import_filename($source, 0), 
		fs_import_filename($dest, 0));
	umask($umask);
	return true;
}

function fs_file_exists($filename) {
	$filename = fs_import_filename($filename, 0);
	return @file_exists($filename);
}

function fs_is_link($filename) {
	$filename = fs_import_filename($filename, 0);
	return is_link($filename);
}

function fs_filesize($filename) {
	$filename = fs_import_filename($filename, 0);
	return filesize($filename);
}

function fs_fopen($filename, $mode, $use_include_path=0) {
	$filename = fs_import_filename($filename, 0);
	return fopen($filename, $mode, $use_include_path);
}

function fs_is_dir($filename) {
	$filename = fs_import_filename($filename, 0);
	return @is_dir($filename);
}

function fs_is_file($filename) {
	$filename = fs_import_filename($filename, 0);
	return @is_file($filename);
}

function fs_opendir($path) {
	$filename = fs_import_filename($filename, 0);
	return opendir($path);
}

function fs_rename($oldname, $newname) {
	$oldname = fs_import_filename($oldname, 0);
	$newname = fs_import_filename($newname, 0);

	/* 
	 * It appears that win32 doesn't like it when you rename 
	 * a file to end with ".dat.bak".  Why?  This is very 
	 * annoying.
	 */
	$newname = str_replace(".dat.bak", ".bak", $newname);

	if (file_exists("$newname.bak")) {
		unlink("$newname.bak");
	}
	if (file_exists("$newname")) {
		return rename($newname, "$newname.bak") &&
			rename($oldname, $newname);
	} else {
		return rename($oldname, $newname);
	}
}

function fs_stat($filename) {
	$filename = fs_import_filename($filename, 0);
	return stat($filename);
}

function fs_unlink($filename) {
	$filename = fs_import_filename($filename, 0);
	return unlink($filename);
}

function fs_executable($filename) {
	$filename = fs_import_filename($filename, 0);
	if (!strstr($filename, ".exe")) {
		$filename .= ".exe";
	}
	return $filename;
}

function fs_mkdir($filename, $perms) {
	$umask = umask(0);
	$results = mkdir(fs_import_filename($filename, 0), $perms);
	umask($umask);
	return $results;
}

function fs_import_filename($filename, $for_exec=1) {
	# Change / and : to \ and ;
	#
 	$filename = str_replace("/", "\\", $filename);
 	$filename = str_replace(":", ";", $filename);

	# Change D;\apps to D:\apps (the : got mangled by the above
	# transform).
	#
	if ($filename{1} == ';') {
		$filename{1} = ':';
	}

	# Convert "D\whoami" to "D:\whoami"
	#
	$filename = ereg_replace("^([A-Z])\\\\(.*)", "\\1:\\\\2", $filename);

	# Convert "\Perl\bin\;D/whoami" to "D:\Perl\bin\whoami"
	#
	$filename = ereg_replace("(.*);([A-Z])\\\\(.*)", "\\2:\\1\\3", $filename);

	if ($for_exec) {
		if (strstr($filename, " ")) {
			$filename = "\"$filename\"";
		}
	}	
	return $filename;
}

function fs_export_filename($filename) {
	
	# Convert "d:\winnt\temp" to "d:/winnt/temp"
	#
	while (strstr($filename, "\\\\")) {
		$filename = str_replace("\\\\", "\\", $filename);
	}
	$filename = str_replace("\\", "/", $filename);

	return $filename;
}

function fs_exec($cmd, &$results, &$status, $debugfile) {

	// We can't redirect stderr with Windows.  Hope that we won't need to.
	return exec("cmd.exe /c $cmd", $results, $status);
}

function fs_tempdir() {
	return export_filename(getenv("TEMP"));
}

function fs_is_executable($filename) {
	return eregi(".(exe|com)$", $filename);
}
?>
