$ = jQuery;

jQuery(document).ready(function($){

    $('.btn-div .read-more').click(function() {
        var $wrapOurClients = $(this).closest('.content-block');
        
        $wrapOurClients.toggleClass('active read_class');
    
        if ($wrapOurClients.hasClass('read_class')) {
            $(this).html('Read Less <svg width="10" height="7" viewBox="0 0 10 7" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M9.7803 0.719668C10.0732 1.01256 10.0732 1.48744 9.7803 1.78033L5.53033 6.0303C5.23744 6.3232 4.76256 6.3232 4.46967 6.0303L0.219668 1.78033C-0.0732225 1.48744 -0.0732225 1.01256 0.219668 0.719668C0.512558 0.426777 0.987438 0.426777 1.28033 0.719668L5 4.43934L8.7197 0.719668C9.0126 0.426777 9.4874 0.426777 9.7803 0.719668Z" fill="#24292E"/></svg>');
        } else {
            $(this).html('Read More <svg width="10" height="7" viewBox="0 0 10 7" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M9.7803 0.719668C10.0732 1.01256 10.0732 1.48744 9.7803 1.78033L5.53033 6.0303C5.23744 6.3232 4.76256 6.3232 4.46967 6.0303L0.219668 1.78033C-0.0732225 1.48744 -0.0732225 1.01256 0.219668 0.719668C0.512558 0.426777 0.987438 0.426777 1.28033 0.719668L5 4.43934L8.7197 0.719668C9.0126 0.426777 9.4874 0.426777 9.7803 0.719668Z" fill="#24292E"/></svg>');
        }
    });

    jQuery("#input_1_4").keypress(function (e) {
		var charCode = e.which ? e.which : event.keyCode;

		if (String.fromCharCode(charCode).match(/[^0-9]/g)) return false;
	});

    jQuery(document).on('click' , '#team_modal' , function(){

        var teamBox = $(this).closest('.our-team-box');
        var memberName = teamBox.find('.member_name').text();
        var post_content = teamBox.find('.post_content').html();
        var team_classes = teamBox.find('.team_classes').text();
        var team_positions = teamBox.find('.team_positions').text();
        var experience = teamBox.find('.experience').text();
        var qualification = teamBox.find('.qualification').text();
        var team_descriptions = teamBox.find('.team_descriptions').html();
        var author_img = teamBox.find('.author_img img').attr('src');
        var icon = teamBox.find('.icon img').attr('src');

        jQuery('.pop_up_member_name span').text(memberName);
        jQuery('.member_content').html(post_content);
        jQuery('.bottom-content li.pop_up_class_name span').text(team_classes);
        jQuery('.bottom-content li.pop_up_experience span').text(experience);
        jQuery('.bottom-content li.pop_up_qulification span').text(qualification);
        jQuery('.bottom-content .team_descriptions').html(team_descriptions);
        jQuery('.pop_up_member_name_right').text(memberName);
        jQuery('.pop_up_member_designation').text(team_positions);
        jQuery('.team-popup-img img').attr( "src" , author_img);
        jQuery('.pop_up_icon img').attr( "src" , icon);

    });


    jQuery('.loading').hide();
    var page = 2;

    jQuery(document).on('change' , '#filter_post_cat' , function(){
        page = 1;
        var ajax_url    = ajax_object.ajax_url;
        var currentValue = jQuery("#filter_post_cat").val();
        
        var data = {
            action: 'load_more_posts',
            page: page,
            select_val: currentValue,
            nonce: ajax_object.nonce,
        };

        $.ajax({
			url: ajax_url,
			type: "POST",
			data: data,
			dataType: "json",
            beforeSend: function(){
                jQuery('.loading').show();
            },
			success: function (response) {
				$("#blog_loop_wrapper").empty().append(response['blog_listing']);
                $("#load_more_btn_wrapper").empty().append(response['max_page']);
                $(".post-count").empty().append(response['result_count']);
                jQuery('.loading').hide();
				page++;
			},
		});

    });

    
    jQuery(document).on('click' , '#load_more_btn' , function(){
        var ajax_url    = ajax_object.ajax_url;
        var currentValue = jQuery("#filter_post_cat").val();
        
        var data = {
            action: 'load_more_posts',
            page: page,
            select_val: currentValue,
            nonce: ajax_object.nonce,
        };

        $.ajax({
			url: ajax_url,
			type: "POST",
			data: data,
			dataType: "json",
            beforeSend: function(){
                jQuery('.loading').show();
            },
			success: function (response) {
				$("#blog_loop_wrapper").append(response['blog_listing']);
                $("#load_more_btn_wrapper").empty().append(response['max_page']);
                $(".post-count").empty().append(response['result_count']);
                jQuery('.loading').hide();
				page++;
			},
		});

    });

    jQuery(document).on('click' , '#explore_by_age' , function(){
        $(this).hide();
        $('#filter_by_ages').show().css('display', 'flex');
        $('#filter_by_classes').hide();
        $('#explore_by_classes').show();

            
            
    });
    jQuery(document).on('click' , '#explore_by_classes' , function(){
        $(this).hide();
        $('#filter_by_classes').show().css('display', 'flex');
        $('#explore_by_age').show();
        $('#filter_by_ages').hide();
    });

    jQuery(document).on('click' , '#filter_by_classes li a , #filter_by_ages li a' , function(){

        $('#filter_by_classes li a').removeClass('active');
        $('#filter_by_ages li a').removeClass('active');
        $(this).addClass('active');
        $(this).addClass('active');

        var cat_slug = $("#filter_by_classes li a.active").attr('data-slug');
        var age_slug = $("#filter_by_ages li a.active").attr('data-slug');
        var age_true = "";
        var cat_true = "";
        if(age_slug != null){
            age_true = true;
        }
        if(cat_slug != null){
            cat_true = true;
        }
        
        var data = {
            action: 'filter_program_classes',
            cat_slug: cat_slug,
            age_slug:age_slug,
            age_true:age_true,
            cat_true:cat_true,
        };

        $.ajax({
			url: ajax_object.ajax_url,
			type: "POST",
			data: data,
			dataType: "json",
            beforeSend: function(){
                jQuery('.loading').show();
            },
			success: function (response) {
				$("#recreational_wrapper").empty().append(response['program_list']);
			},
		});

    });

    jQuery('#scroll_to_ages').on('click' , function(e){
        
        e.preventDefault(); 

        jQuery('#home_filter_by_ages').show();        
        jQuery('#home_filter_by_classes').hide();   


        jQuery('#home_explore_by_age').hide();   
        jQuery('#home_explore_by_classes').show();   
        
        

        var target = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(target).offset().top - 200 
        }, 1000); 

    });
    jQuery('#scroll_to_classes').on('click' , function(e){
        
        e.preventDefault(); 

        jQuery('#home_filter_by_ages').hide();        
        jQuery('#home_filter_by_classes').show();   


        jQuery('#home_explore_by_age').show();   
        jQuery('#home_explore_by_classes').hide();   
        
        

        var target = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(target).offset().top - 200 
        }, 1000); 

    });

    jQuery('#home_explore_by_classes').hide();
    jQuery('#home_filter_by_ages').hide();

    jQuery(document).on('click' , '#home_explore_by_age' , function(){
        $(this).hide();
        $('#home_filter_by_ages').show().css('display', 'flex');
        $('#home_filter_by_classes').hide();
        $('#home_explore_by_classes').show();

            
            
    });
    jQuery(document).on('click' , '#home_explore_by_classes' , function(){
        $(this).hide();
        $('#home_filter_by_classes').show().css('display', 'flex');
        $('#home_explore_by_age').show();
        $('#home_filter_by_ages').hide();
    });

    jQuery(document).on('click' , '#home_filter_by_classes li a , #home_filter_by_ages li a' , function(){

        $('#home_filter_by_classes li a').removeClass('active');
        $('#home_filter_by_ages li a').removeClass('active');
        $(this).addClass('active');
        $(this).addClass('active');

        var cat_slug = $("#home_filter_by_classes li a.active").attr('data-slug');
        var age_slug = $("#home_filter_by_ages li a.active").attr('data-slug');
        var age_true = "";
        var cat_true = "";
        if(age_slug != null){
            age_true = true;
        }
        if(cat_slug != null){
            cat_true = true;
        }
        
        var data = {
            action: 'home_filter_program_classes',
            cat_slug: cat_slug,
            age_slug:age_slug,
            age_true:age_true,
            cat_true:cat_true,
        };

        $.ajax({
			url: ajax_object.ajax_url,
			type: "POST",
			data: data,
			dataType: "json",
            beforeSend: function(){
                jQuery('.loading').show();
            },
			success: function (response) {
				$("#home_recreational_wrapper").empty().append(response['program_list']);
			},
		});

    });

});