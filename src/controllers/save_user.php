<?php
session_start();
requireValidSession(true);

loadTemplateView('save_user');
