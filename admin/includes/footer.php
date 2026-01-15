<!-- Admin Footer -->
            </div><!-- #admin-content -->
        </main>
    </div>
    
    <!-- Initialize Supabase -->
    <script>
        // Load Supabase config and initialize client
        const supabaseUrl = '<?php echo getSupabaseConfig()['url']; ?>';
        const supabaseKey = '<?php echo getSupabaseConfig()['anon_key']; ?>';
        
        // Initialize Supabase client
        initSupabase(supabaseUrl, supabaseKey);
    </script>
</body>
</html>
