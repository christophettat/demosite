<?php exit(); ?>
<?xml version="1.0" encoding="ISO-8859-1"?>
<entries>
<!-- REQUIRED, throws custom exception if missing -->
	<entry key="Username" value="jta_ttat"/>
<!-- REQUIRED, throws custom exception if missing -->
	<entry key="Password" value="slCEIyJwWtjJ"/>
<!-- optional, may be left out or empty - defaults to 'en' -->
	<entry key="Language" value="en"/>
<!-- optional, may be left out or empty - defaults to empty collection -->
	<entry key="Languages" value="en;da;de;el"/>
<!-- optional, may be left out or empty - defaults to 'Default' -->
	<entry key="TemplatePublic" value="Sunrise"/>
<!-- optional, may be left out or empty - defaults to 'Default' -->
	<entry key="TemplateAdmin" value="Sunrise"/>
<!-- optional, may be left out or empty - defaults to False -->
	<entry key="AllowTemplateOverriding" value="False"/>
<!-- optional, may be left out or empty - no extension is loaded in this case (empty page) -->
	<entry key="DefaultExtension" value="SMPages"/>
<!-- REQUIRED, Sitemagic Framework won't execute extensions if left out or empty -->
	<entry key="ExtensionsEnabled" value="SMAnnouncements;SMAutoSeoUrls;SMConfig;SMExtensionCommon;SMLogin;SMPages;SMMenu;SMFiles;SMContact;SMExternalModules;SMDesigner;SMImageMontage;SMGoogleAnalytics;SMLanguageEditor"/>
<!-- optional, may be left out or empty - defaults to server setting -->
	<entry key="DefaultTimeZoneOverride" value=""/>
<!-- optional, may be left out or empty - defaults to 'Default' -->
	<entry key="ImageTheme" value="Default"/>
<!-- optional, may be left out (null) or empty -->
	<entry key="LicenseKey" value=""/>
<!-- REQUIRED, but only if using MySQL as the data source -->
	<entry key="DatabaseConnection" value="localhost;db;user;pass"/>
<!-- optional, may be left out or empty - defaults to False -->
	<entry key="Debug" value="True"/>
<!-- optional, may be left out or empty (in which case PHP mail() is used to send e-mails) -->
	<entry key="SMTPHost" value="smtp.gmail.com"/>
<!-- optional, may be left out or empty - defaults to 25) -->
	<entry key="SMTPPort" value="587"/>
<!-- optional, may be left out or empty - valid values: LOGIN (default), PLAIN, NTLM, CRAM-MD5 -->
	<entry key="SMTPAuthType" value="PLAIN"/>
<!-- optional, may be left out or empty - valid values: TLS, SSL -->
	<entry key="SMTPEncryption" value="TLS"/>
<!-- optional, may be left out or empty -->
	<entry key="SMTPUser" value="gitevigan@gmail.com"/>
<!-- optional, may be left out or empty -->
	<entry key="SMTPPass" value="ogjtzoaqfulyjpqu"/>
<!-- optional, may be left out or empty - defaults to False -->
	<entry key="SMTPDebug" value="True"/>
</entries>