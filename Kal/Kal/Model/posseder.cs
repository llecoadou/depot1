namespace Kal.Model
{
    using System;
    using System.Collections.Generic;
    using System.ComponentModel.DataAnnotations;
    using System.ComponentModel.DataAnnotations.Schema;
    using System.Data.Entity.Spatial;

    [Table("kaldb.posseder")]
    public partial class posseder
    {
        [Key]
        [Column(Order = 0)]
        public long NUMCOM { get; set; }

        [Key]
        [Column(Order = 1)]
        [StringLength(32)]
        public string REFPROD { get; set; }
    }
}
