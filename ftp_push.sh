#!/bin/bash
date >> logs/ftp_push.log
if [ ! -f .lftp_sync ] ; then
	exit 0
fi
lftp -f .lftp_sync >> logs/ftp_push.log
