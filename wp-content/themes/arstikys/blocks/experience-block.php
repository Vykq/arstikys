
<div class="experience-block">
    <div class="container">
        <h2 class="title white px50 semi"><?php the_field('title'); ?></h2>
        <p class="content white"><?php the_field('content'); ?></p>

        <?php if(have_rows('experience')) : ?>
            <div class="experience-area">
                <?php while(have_rows('experience')) : the_row(); ?>
                    <?php  $rowCount = count(get_sub_field('where')); ;?>
                    <div class="single-experience">
                        <div class="left">
                            <?php if(have_rows('where')) : ?>
                                <?php $counter = 1; // Initialize a counter ?>
                                <div class="title">
                                    <p>
                                    <?php while(have_rows('where')) : the_row(); ?>
                                        <?php echo the_sub_field('title') ;?>
                                        <?php if ($counter < $rowCount) : ?>
                                            <span class="divider">/</span>
                                        <?php endif; ?>
                                        <?php $counter++; ?>
                                    <?php endwhile; ?>
                                    </p>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="right">
                            <div class="date">
                                <?php
                                $start = get_sub_field('start');
                                $end = (get_sub_field('end')) ? get_sub_field('end') : 'Present';
                                $today = date('M-Y-d');

                                $startDate = new DateTime($start);
                                $endDate = (get_sub_field('end')) ? new DateTime($end) : new DateTime($today);
                                $interval = $startDate->diff($endDate);
                                $startShow = date('M Y', strtotime($start));
                                if($end == "Present"){
                                    $endShow = 'Present';
                                } else {
                                    $endShow = date('M Y', strtotime($end));
                                }

                                ?>
                                <p class="px18"><?php echo $startShow; ?> - <?php echo $endShow; ?> · <?php echo $interval->format('%y yr %m mos'); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</div>