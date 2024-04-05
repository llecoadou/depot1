namespace Kal.Model
{
    using System;
    using System.Collections.Generic;
    using System.ComponentModel.DataAnnotations;
    using System.ComponentModel.DataAnnotations.Schema;
    using System.Data.Entity.Spatial;

    [Table("kaldb.animal")]
    public partial class animal
    {
        [Key]
        public int NUMANIMAL { get; set; }

        public int ID { get; set; }

        [StringLength(32)]
        public string NOMANIMAL { get; set; }

        public int? AGEANIMAL { get; set; }

        [StringLength(32)]
        public string RACEANIMAL { get; set; }

        [StringLength(32)]
        public string PROPRIANIMAL { get; set; }

        public virtual utilisateur utilisateur { get; set; }
    }
}
