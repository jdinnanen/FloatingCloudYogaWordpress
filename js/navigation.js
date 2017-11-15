
/* Applying the "open" class when you click the Menu button, which triggers the mobile menu to open/close; Toggle Menu/Close menu text. */

  jQuery('.mobile-button a').click(function(e) {
	jQuery(this).parent().parent().toggleClass('open');
  jQuery(this).html($(this).html() == 'Close Menu' ? 'Menu' : 'Close Menu');
    e.preventDefault();
  });